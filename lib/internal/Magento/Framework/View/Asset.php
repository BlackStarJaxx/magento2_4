<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\View;

use Magento\Framework\View\Asset\Repository;

class Asset
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @var string
     */
    private $sourcePath;

    /**
     * @var string
     */
    protected $module;

    /**
     * @var string
     */
    protected $area;

    /**
     * @var string
     */
    protected $theme;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    private $extension;

    /**
     * File constructor.
     * @param string $fileName
     * @param string $sourcePath
     * @param string|null $area
     * @param string|null $theme
     * @param string|null $locale
     * @param string|null $module
     */
    public function __construct(
        $fileName,
        $sourcePath = null,
        $area = null,
        $theme = null,
        $locale = null,
        $module = null
    ) {
        $this->fileName = $fileName;
        $this->sourcePath = $sourcePath;
        $this->module = $module;
        $this->area = $area;
        $this->theme = $theme;
        $this->locale = $locale;
    }

    /**
     * Retrieves filename.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     *  Retrieves file ID.
     *
     * @return string
     */
    public function getFileId()
    {
        if ($this->getModule()) {
            return $this->getModule() . Repository::FILE_ID_SEPARATOR . $this->getFileName();
        }
        return $this->getFileName();
    }

    /**
     *  Retrieves file path.
     *
     * @return string
     */
    public function getFilePath()
    {
        if ($this->getModule()) {
            return $this->getModule() . '/' . $this->getFileName();
        }
        return $this->getFileName();
    }

    /**
     * Retrieves source path.
     *
     * @return string
     */
    public function getSourcePath()
    {
        return $this->sourcePath;
    }

    /**
     * Retrieves module.
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Retrieves area.
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     *  Retrieves theme.
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Retrieves locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Retrieves file extension.
     *
     * @return string
     */
    public function getExtension()
    {
        if (!$this->extension) {
            $this->extension = $this->getFileName() !== null
                ? strtolower(pathinfo($this->getFileName(), PATHINFO_EXTENSION))
                : '';
        }
        return $this->extension;
    }
}
