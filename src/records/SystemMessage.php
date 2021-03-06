<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\records;

use craft\db\ActiveRecord;
use craft\validators\LanguageValidator;

/**
 * Class SystemMessage record.
 *
 * @property int    $id       ID
 * @property string $language Language
 * @property string $key      Key
 * @property string $subject  Subject
 * @property string $body     Body
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  3.0
 */
class SystemMessage extends ActiveRecord
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key'], 'unique', 'targetAttribute' => ['key', 'language']],
            [['key', 'language', 'subject', 'body'], 'required'],
            [['key'], 'string', 'max' => 150],
            [['language'], LanguageValidator::class],
            [['subject'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     *
     * @return string
     */
    public static function tableName(): string
    {
        return '{{%systemmessages}}';
    }
}
