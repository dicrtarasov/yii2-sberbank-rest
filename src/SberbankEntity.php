<?php
/*
 * @copyright 2019-2020 Dicr http://dicr.org
 * @author Igor A Tarasov <develop@dicr.org>
 * @license MIT
 * @version 16.10.20 08:07:17
 */

declare(strict_types = 1);
namespace dicr\sberbank;

use dicr\helper\JsonEntity;

/**
 * Абстрактная структура данных Сбербанк.
 */
abstract class SberbankEntity extends JsonEntity
{
    /**
     * @inheritDoc
     */
    public function attributeEntities() : array
    {
        // по-умолчанию отключаем трансляцию названий аттрибутов
        return [];
    }
}