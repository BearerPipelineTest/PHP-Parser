<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

class InterpolatedStringPart extends NodeAbstract {
    /** @var string String value */
    public $value;

    /**
     * Constructs a node representing a string part of an interpolated string.
     *
     * @param string $value      String value
     * @param array  $attributes Additional attributes
     */
    public function __construct(string $value, array $attributes = []) {
        $this->attributes = $attributes;
        $this->value = $value;
    }

    public function getSubNodeNames(): array {
        return ['value'];
    }

    public function getType(): string {
        return 'InterpolatedStringPart';
    }
}

// @deprecated compatibility alias
class_alias(InterpolatedStringPart::class, Scalar\EncapsedStringPart::class);
