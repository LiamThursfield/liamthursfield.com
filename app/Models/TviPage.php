<?php

namespace App\Models;

use Illuminate\Support\Arr;

class TviPage
{

    /**
     * @var array
     */
    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getContent() : array
    {
        return Arr::get($this->data, 'content', []) ?? [];
    }

    public function getContentField(string $field) : array
    {
        return Arr::get($this->getContent(), $field, []) ?? [];
    }

    public function getContentFieldData(string $field)
    {
        return Arr::get($this->getContentField($field), 'data');
    }

    public function getContentFieldTemplate(string $field) : array
    {
        return Arr::get($this->getContentField($field), 'template_field', []) ?? [];
    }

    public function getContentFieldTemplateType(string $field) : string
    {
        return Arr::get($this->getContentFieldTemplate($field), 'type', '');
    }

    public function getLayout() : array
    {
        return Arr::get($this->data, 'layout', []) ?? [];
    }

    public function getLayoutContent() : array
    {
        return Arr::get($this->getLayout(), 'content', []) ?? [];
    }

    public function getLayoutContentField(string $field) : array
    {
        return Arr::get($this->getLayoutContent(), $field, []) ?? [];
    }

    public function getLayoutContentFieldData(string $field)
    {
        return Arr::get($this->getLayoutContentField($field), 'data');
    }

    public function getLayoutContentFieldTemplate(string $field) : array
    {
        return Arr::get($this->getLayoutContentField($field), 'template_field', []) ?? [];
    }

    public function getLayoutContentFieldTemplateType(string $field) : string
    {
        return Arr::get($this->getLayoutContentFieldTemplate($field), 'type', '');
    }


    public function getLayoutName(string $fallback = '') : string
    {
        return Arr::get($this->data, 'layout.name', $fallback);
    }

    public function getLayoutSlug(string $fallback = '') : string
    {
        return Arr::get($this->data, 'layout.slug', $fallback);
    }

    public function getMetadata() : ?array
    {
        return Arr::get($this->data, 'metadata');
    }

    public function getMetadataField(string $field, string $fallback = '') : ?string
    {
        return Arr::get($this->data, 'metadata.' . $field, $fallback);
    }

    public function getPageName($fallback = '') : string
    {
        return Arr::get($this->data, 'name', $fallback);
    }

    public function getPageSlug($fallback = '') : string
    {
        return Arr::get($this->data, 'slug', $fallback);
    }

    public function getTemplateName($fallback = '') : string
    {
        return Arr::get($this->data, 'template.name', $fallback);
    }

    public function getTemplateSlug($fallback = '') : string
    {
        return Arr::get($this->data, 'template.slug', $fallback);
    }

    public function getUrlFull(string $fallback = '') : string
    {
        return Arr::get($this->data, 'url.url_full', $fallback);
    }

    public function getUrlMain(string $fallback = '') : string
    {
        return Arr::get($this->data, 'url.url_main', $fallback);
    }

}