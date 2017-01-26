<?php
/**
 * @author Richard Fussenegger <fleshgrinder@users.noreply.github.com>
 * @copyright 2016 Richard Fussenegger
 * @license MIT
 */

namespace Fleshgrinder\Assertion;

/**
 * @covers \Variable::hasStrictArraysOnly()
 * @covers \Variable::isStrictArray()
 * @uses \Variable::applyCallback()
 * @uses \Variable::isTraversable()
 */
final class StrictArrayTest extends VariableTest {

	/** @inheritDoc */
	protected function getMethodName() {
		return 'hasStrictArraysOnly';
	}

	/** @inheritDoc */
	protected function getDataTypesToExclude() {
		return [
			'empty_array',
			'array',
			'empty_fixed_array',
			'fixed_array',
			'callable_method',
		];
	}

}