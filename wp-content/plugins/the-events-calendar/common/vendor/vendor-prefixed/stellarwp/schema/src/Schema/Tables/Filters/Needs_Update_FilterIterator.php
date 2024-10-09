<?php
/**
 * @license GPL-2.0
 *
 * Modified using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace TEC\Common\StellarWP\Schema\Tables\Filters;

use CallbackFilterIterator;
use Countable;
use FilterIterator;

class Needs_Update_FilterIterator extends FilterIterator implements Countable {
	/**
	 * @inheritDoc
	 */
	public function accept(): bool {
		$table = $this->getInnerIterator()->current();

		return ! $table->is_schema_current();
	}

	/**
	 * @inheritDoc
	 */
	public function count(): int {
		return iterator_count( new CallbackFilterIterator( $this->getInnerIterator(), function (): bool {
			return $this->accept();
		} ) );
	}
}
