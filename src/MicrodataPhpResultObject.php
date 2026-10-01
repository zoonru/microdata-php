<?php

declare(strict_types=1);

namespace Zoon\MicrodataPHP;

/**
 * @psalm-immutable
 */
final class MicrodataPhpResultObject {

	/**
	 * @psalm-capabilities read-props
	 */
	public function __construct(
		public readonly array $properties,
		public readonly ?array $type,
		public readonly ?string $id,
	) {
	}
}
