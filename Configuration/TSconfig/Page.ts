
/**
 * tx_gridelements
 */
tx_gridelements.setup.tx_adxgridelementsaccordion {

	title = LLL:EXT:adx_gridelements_accordion/Resources/Private/Language/locallang.xfl:title
	description = LLL:EXT:adx_gridelements_accordion/Resources/Private/Language/locallang.xfl:description
	flexformDS = FILE:EXT:adx_gridelements_accordion/Configuration/FlexForm/DS.xml
	icon = EXT:adx_gridelements_accordion/Resources/Public/Icons/24x24/Accordion.gif,EXT:adx_gridelements_accordion/Resources/Public/Icons/16x16/Accordion.gif
	frame = 2

	config {

		colCount = 1
		rowCount = 1

		rows {
			1 {
				columns {
					1 {
						name = LLL:EXT:adx_gridelements_accordion/Resources/Private/Language/locallang.xfl:columnName.0
						colPos = 0
					}
				}
			}
		}
	}
}