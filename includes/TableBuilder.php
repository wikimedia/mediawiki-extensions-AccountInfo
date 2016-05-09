<?php

/**
 * Fork of Xml::buildTable to use classes instead of ids.
 */
class TableBuilder {

	/**
	 * @param array $rows array of rows, will not be escaped
	 * @param array $headers raw HTML, will not be escaped
	 * @param array $attribs
	 * @return string
	 */
	public static function buildTable( $rows, $headers, $attribs = [] ) {
		$s = Xml::openElement( 'table', $attribs );

		if ( is_array( $headers ) ) {
			$s .= Xml::openElement( 'thead', $attribs );

			foreach ( $headers as $class => $header ) {
				$attribs = [];

				if ( is_string( $class ) ) {
					$attribs['class'] = $class;
				}

				$s .= Html::rawElement( 'th', $attribs, $header );
			}
			$s .= Xml::closeElement( 'thead' );
		}

		foreach ( $rows as $class => $row ) {
			$attribs = [];

			if ( is_string( $class ) ) {
				$attribs['class'] = $class;
			}

			$s .= self::buildTableRow( $attribs, $row );
		}

		$s .= Xml::closeElement( 'table' );

		return $s;
	}

	/**
	 * Build a row for a table
	 * @param array $attribs An array of attributes to apply to the tr tag
	 * @param array $cells An array of strings to put in <td>
	 * @return string
	 */
	protected static function buildTableRow( $attribs, $cells ) {
		$s = Xml::openElement( 'tr', $attribs );

		foreach ( $cells as $class => $cell ) {
			$attribs = [];

			if ( is_string( $class ) ) {
				$attribs['class'] = $class;
			}

			$s .= Html::rawElement( 'td', $attribs, $cell );
		}

		$s .= Xml::closeElement( 'tr' );

		return $s;
	}
}
