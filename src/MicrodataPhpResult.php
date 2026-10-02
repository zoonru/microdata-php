<?php

declare(strict_types=1);

namespace Zoon\MicrodataPHP;

/**
 * @psalm-immutable
 */
final class MicrodataPhpResult {

	/**
	 * @psalm-capabilities read-props
	 */
	public function __construct(
		/** @var list<MicrodataPhpResultObject> */
		public readonly array $items,
	) {
	}
}
