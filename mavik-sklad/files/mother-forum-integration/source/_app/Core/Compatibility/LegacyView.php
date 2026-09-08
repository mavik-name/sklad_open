<?php
declare(strict_types=1);

namespace R300\Core\Compatibility;

use Mavik\Core\Container as LegacyContainer;
use Mavik\Core\Response as LegacyResponse;
use R300\Core\Maintenance\MaintenanceMode;
use R300\Core\Security\AuthManager;
use R300\Core\Security\Csrf;
use RuntimeException;
use Throwable;

final class LegacyView
{
    public function __construct(
        private string $root,
        private LegacyContainer $container,
        private MaintenanceMode $maintenance,
        private AuthManager $auth,
        private Csrf $csrf,
    ) {}

    public function page(string $view, array $data = [], array $meta = []): LegacyResponse
    {
        $data['owner'] = $this->auth->isOwner();
        $data['ownerCsrf'] = $this->csrf->token();
        $content = $this->render($this->appPath($view), $data);
        $moduleStyles = $this->loadAssets((array) ($meta['module_styles'] ?? []));
        $moduleScripts = $this->loadAssets((array) ($meta['module_scripts'] ?? []));
        $site = (array) $this->container->get('site');
        $modules = $this->container->get('modules');
        $title = (string) ($meta['title'] ?? 'MaVik');
        $description = trim((string) ($meta['description'] ?? ''));
        if ($description === '') {
            $description = 'Офіційний авторський сайт Макарчука Віктора (MaVik). Книги, проза, поезія, музика, авторський блог та форум.';
        }
        $robots = (string) ($meta['robots'] ?? 'index,follow,max-image-preview:large');
        $canonical = (string) ($meta['canonical'] ?? rtrim((string) ($site['base_url'] ?? ''), '/') . '/');
        $jsonld = $meta['jsonld'] ?? null;
        $image = (string)($meta['image'] ?? '');
        $imageAlt = (string)($meta['image_alt'] ?? '');
        $ogType = (string)($meta['og_type'] ?? 'website');
        $twitterTitle = (string)($meta['twitter_title'] ?? '');
        $twitterDescription = (string)($meta['twitter_description'] ?? '');
        $articlePublishedTime = (string)($meta['article_published_time'] ?? '');
        $articleModifiedTime = (string)($meta['article_modified_time'] ?? '');
        $articleAuthor = (string)($meta['article_author'] ?? '');
        $owner = $this->auth->isOwner();
        $nonce = base64_encode(random_bytes(18));

        $html = $this->render($this->appPath('Views/layout.php'), compact(
            'content', 'site', 'modules', 'title', 'description', 'robots', 'canonical', 'jsonld', 'image', 'imageAlt', 'ogType', 'twitterTitle', 'twitterDescription', 'articlePublishedTime', 'articleModifiedTime', 'articleAuthor', 'owner', 'nonce', 'moduleStyles', 'moduleScripts'
        ));

        if ($this->maintenance->isEnabled() && $this->auth->isOwner()) {
            $banner = '<div data-r300-maintenance-owner style="position:relative;z-index:2147483647;background:#8b1010;color:#fff;padding:8px 14px;text-align:center;font:700 13px/1.3 system-ui,sans-serif;letter-spacing:.02em">MAINTENANCE MODE УВІМКНЕНО · Ви бачите сайт як власник</div>';
            $html = preg_replace('/<body([^>]*)>/', '<body$1>' . $banner, $html, 1) ?? $html;
        }

        $csp = "default-src 'self'; base-uri 'self'; frame-ancestors 'none'; object-src 'none'; img-src 'self' data: https:; font-src 'self' data:; style-src 'self' 'nonce-{$nonce}'; script-src 'self' 'nonce-{$nonce}' https://*.clarity.ms; connect-src 'self' https://*.clarity.ms https://c.bing.com; frame-src 'none'; form-action 'self'; upgrade-insecure-requests";

        return new LegacyResponse($html, (int) ($meta['status'] ?? 200), [
            'Content-Type' => 'text/html; charset=UTF-8',
            'Content-Security-Policy' => $csp,
        ] + (!empty($data['unavailableNotice']) ? ['Cache-Control'=>'no-store'] : []));
    }

    private function render(string $templateFile, array $data): string
    {
        if (!is_file($templateFile)) {
            throw new RuntimeException('Overlay view not found: ' . $templateFile);
        }
        extract($data, EXTR_SKIP);
        ob_start();
        try {
            require $templateFile;
            return (string) ob_get_clean();
        } catch (Throwable $e) {
            ob_end_clean();
            throw $e;
        }
    }

    private function loadAssets(array $assets): array
    {
        $result = [];
        foreach ($assets as $asset) {
            if (!is_string($asset) || $asset === '') {
                continue;
            }
            $path = $this->appPath('Modules/' . ltrim($asset, '/'));
            if (is_file($path)) {
                $body = file_get_contents($path);
                if ($body !== false) {
                    $result[] = $body;
                }
            }
        }
        return $result;
    }

    private function appPath(string $relative): string
    {
        $relative = str_replace('\\', '/', ltrim($relative, '/'));
        if ($relative === '' || str_contains($relative, "\0") || str_contains($relative, '../') || str_starts_with($relative, '..')) {
            throw new RuntimeException('Invalid overlay application path.');
        }
        return rtrim($this->root, '/\\') . '/_app/' . $relative;
    }
}
