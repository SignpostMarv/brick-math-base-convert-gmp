<?php

declare(strict_types=1);

namespace SignpostMarv\Brick\Math\Tests\Calculator;

use InvalidArgumentException;
use SignpostMarv\Brick\Math\Calculator;
use SignpostMarv\Brick\Math\Calculator\GmpCalculator;

/**
 * Unit tests for class GmpCalculator.
 */
class GmpCalculatorTest extends AbstractCalculatorTest
{
	public function testDivQR() : void
	{
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '-1'));
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '-2'));
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '-3'));
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '0'));
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '1'));
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '2'));
		static::assertSame(['0', '0'], $this->ObtainCalculator()->divQR('0', '3'));
		static::assertSame(['1', '0'], $this->ObtainCalculator()->divQR('1', '1'));
		static::assertSame(['2', '0'], $this->ObtainCalculator()->divQR('2', '1'));
		static::assertSame(['-1', '0'], $this->ObtainCalculator()->divQR('1', '-1'));
	}

	/**
	* @return list<array{0:string, 1:string, 2:class-string<\Throwable>, 3:string}>
	*/
	public function dataProviderDivQRFailure() : array
	{
		return [
			[
				'4.3',
				'-2.1',
				InvalidArgumentException::class,
				(
					'Argument 1 passed to ' .
					GmpCalculator::class .
					'::divQR() must be an integer-string!'
				),
			],
			[
				'-4.3',
				'-2.1',
				InvalidArgumentException::class,
				(
					'Argument 1 passed to ' .
					GmpCalculator::class .
					'::divQR() must be an integer-string!'
				),
			],
			[
				'-4.3',
				'2.1',
				InvalidArgumentException::class,
				(
					'Argument 1 passed to ' .
					GmpCalculator::class .
					'::divQR() must be an integer-string!'
				),
			],
			[
				'4',
				'-2.1',
				InvalidArgumentException::class,
				(
					'Argument 2 passed to ' .
					GmpCalculator::class .
					'::divQR() must be an integer-string!'
				),
			],
			[
				'-4',
				'-2.1',
				InvalidArgumentException::class,
				(
					'Argument 2 passed to ' .
					GmpCalculator::class .
					'::divQR() must be an integer-string!'
				),
			],
			[
				'-4',
				'2.1',
				InvalidArgumentException::class,
				(
					'Argument 2 passed to ' .
					GmpCalculator::class .
					'::divQR() must be an integer-string!'
				),
			],
		];
	}

	/**
	* @dataProvider dataProviderDivQRFailure
	*
	* @param class-string<\Throwable> $expected_exception_type
	*/
	public function testDivQRFailure(
		string $a,
		string $b,
		string $expected_exception_type,
		string $expected_exception_message
	) : void {
		static::expectException($expected_exception_type);
		static::expectExceptionMessage($expected_exception_message);

		$this->ObtainCalculator()->divQR($a, $b);
	}

	protected function ObtainCalculator() : Calculator
	{
		return new GmpCalculator();
	}
}
