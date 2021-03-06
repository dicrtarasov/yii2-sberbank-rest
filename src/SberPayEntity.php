<?php
/*
 * @copyright 2019-2021 Dicr http://dicr.org
 * @author Igor A Tarasov <develop@dicr.org>
 * @license MIT
 * @version 14.02.21 06:44:32
 */

declare(strict_types = 1);
namespace dicr\sberpay;

use dicr\json\JsonEntity;

/**
 * Абстрактная структура данных Сбербанк.
 */
abstract class SberPayEntity extends JsonEntity
{
    /**
     * @inheritDoc
     */
    public function attributeFields(): array
    {
        // по-умолчанию отключаем трансляцию названий аттрибутов
        return [];
    }
}
