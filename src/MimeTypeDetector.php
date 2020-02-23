<?php

declare(strict_types=1);

namespace Flysystem\MimeTypeDetection;

interface MimeTypeDetector
{
    /**
     * @param string|resource $contents
     */
    public function detectMimeType(string $path, $contents): ?string;

    public function detectMimeTypeFromPath(string $path): ?string;

    public function detectMimeTypeFromFile(string $path): ?string;
}