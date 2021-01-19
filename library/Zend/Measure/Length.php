<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category  Zend
 * @package   Zend_Measure
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd     New BSD License
 * @version   $Id$
 */

/**
 * Implement needed classes
 */
//require_once 'Zend/Measure/Abstract.php';
//require_once 'Zend/Locale.php';

/**
 * Class for handling length conversions
 *
 * @category   Zend
 * @package    Zend_Measure
 * @subpackage Zend_Measure_Length
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Measure_Length extends Zend_Measure_Abstract
{
    const STANDARD = 'METER';

    const AGATE                 = 'AGATE';
    const ALEN_DANISH           = 'ALEN_DANISH';
    const ALEN                  = 'ALEN';
    const ALEN_SWEDISH          = 'ALEN_SWEDISH';
    const ANGSTROM              = 'ANGSTROM';
    const ARMS                  = 'ARMS';
    const ARPENT_CANADIAN       = 'ARPENT_CANADIAN';
    const ARPENT                = 'ARPENT';
    const ARSHEEN               = 'ARSHEEN';
    const ARSHIN                = 'ARSHIN';
    const ARSHIN_IRAQ           = 'ARSHIN_IRAQ';
    const ASTRONOMICAL_UNIT     = 'ASTRONOMICAL_UNIT';
    const ATTOMETER             = 'ATTOMETER';
    const BAMBOO                = 'BAMBOO';
    const BARLEYCORN            = 'BARLEYCORN';
    const BEE_SPACE             = 'BEE_SPACE';
    const BICRON                = 'BICRON';
    const BLOCK_US_EAST         = 'BLOCK_US_EAST';
    const BLOCK_US_WEST         = 'BLOCK_US_WEST';
    const BLOCK_US_SOUTH        = 'BLOCK_US_SOUTH';
    const BOHR                  = 'BOHR';
    const BRACCIO               = 'BRACCIO';
    const BRAZA_ARGENTINA       = 'BRAZA_ARGENTINA';
    const BRAZA                 = 'BRAZA';
    const BRAZA_US              = 'BRAZA_US';
    const BUTTON                = 'BUTTON';
    const CABLE_US              = 'CABLE_US';
    const CABLE_UK              = 'CABLE_UK';
    const CALIBER               = 'CALIBER';
    const CANA                  = 'CANA';
    const CAPE_FOOT             = 'CAPE_FOOT';
    const CAPE_INCH             = 'CAPE_INCH';
    const CAPE_ROOD             = 'CAPE_ROOD';
    const CENTIMETER            = 'CENTIMETER';
    const CHAIN                 = 'CHAIN';
    const CHAIN_ENGINEER        = 'CHAIN_ENGINEER';
    const CHIH                  = 'CHIH';
    const CHINESE_FOOT          = 'CHINESE_FOOT';
    const CHINESE_INCH          = 'CHINESE_INCH';
    const CHINESE_MILE          = 'CHINESE_MILE';
    const CHINESE_YARD          = 'CHINESE_YARD';
    const CITY_BLOCK_US_EAST    = 'CITY_BLOCK_US_EAST';
    const CITY_BLOCK_US_WEST    = 'CITY_BLOCK_US_WEST';
    const CITY_BLOCK_US_SOUTH   = 'CITY_BLOCK_US_SOUTH';
    const CLICK                 = 'CLICK';
    const CUADRA                = 'CUADRA';
    const CUADRA_ARGENTINA      = 'CUADRA_ARGENTINA';
    const CUBIT_EGYPT           = 'Length:CUBIT_EGYPT';
    const CUBIT_ROYAL           = 'CUBIT_ROYAL';
    const CUBIT_UK              = 'CUBIT_UK';
    const CUBIT                 = 'CUBIT';
    const CUERDA                = 'CUERDA';
    const DECIMETER             = 'DECIMETER';
    const DEKAMETER             = 'DEKAMETER';
    const DIDOT_POINT           = 'DIDOT_POINT';
    const DIGIT                 = 'DIGIT';
    const DIRAA                 = 'DIRAA';
    const DONG                  = 'DONG';
    const DOUZIEME_WATCH        = 'DOUZIEME_WATCH';
    const DOUZIEME              = 'DOUZIEME';
    const DRA_IRAQ              = 'DRA_IRAQ';
    const DRA                   = 'DRA';
    const EL                    = 'EL';
    const ELL                   = 'ELL';
    const ELL_SCOTTISH          = 'ELL_SCOTTISH';
    const ELLE                  = 'ELLE';
    const ELLE_VIENNA           = 'ELLE_VIENNA';
    const EM                    = 'EM';
    const ESTADIO_PORTUGAL      = 'ESTADIO_PORTUGAL';
    const ESTADIO               = 'ESTADIO';
    const EXAMETER              = 'EXAMETER';
    const FADEN_AUSTRIA         = 'FADEN_AUSTRIA';
    const FADEN                 = 'FADEN';
    const FALL                  = 'FALL';
    const FALL_SCOTTISH         = 'FALL_SCOTTISH';
    const FATHOM                = 'FATHOM';
    const FATHOM_ANCIENT        = 'FATHOM_ANCIENT';
    const FAUST                 = 'FAUST';
    const FEET_OLD_CANADIAN     = 'FEET_OLD_CANADIAN';
    const FEET_EGYPT            = 'FEET_EGYPT';
    const FEET_FRANCE           = 'FEET_FRANCE';
    const FEET                  = 'FEET';
    const FEET_IRAQ             = 'FEET_IRAQ';
    const FEET_NETHERLAND       = 'FEET_NETHERLAND';
    const FEET_ITALIC           = 'FEET_ITALIC';
    const FEET_SURVEY           = 'FEET_SURVEY';
    const FEMTOMETER            = 'FEMTOMETER';
    const FERMI                 = 'FERMI';
    const FINGER                = 'FINGER';
    const FINGERBREADTH         = 'FINGERBREADTH';
    const FIST                  = 'FIST';
    const FOD                   = 'FOD';
    const FOOT_EGYPT            = 'FOOT_EGYPT';
    const FOOT_FRANCE           = 'FOOT_FRANCE';
    const FOOT                  = 'FOOT';
    const FOOT_IRAQ             = 'FOOT_IRAQ';
    const FOOT_NETHERLAND       = 'FOOT_NETHERLAND';
    const FOOT_ITALIC           = 'FOOT_ITALIC';
    const FOOT_SURVEY           = 'FOOT_SURVEY';
    const FOOTBALL_FIELD_CANADA = 'FOOTBALL_FIELD_CANADA';
    const FOOTBALL_FIELD_US     = 'FOOTBALL_FIELD_US';
    const FOOTBALL_FIELD        = 'FOOTBALL_FIELD';
    const FURLONG               = 'FURLONG';
    const FURLONG_SURVEY        = 'FURLONG_SURVEY';
    const FUSS                  = 'FUSS';
    const GIGAMETER             = 'GIGAMETER';
    const GIGAPARSEC            = 'GIGAPARSEC';
    const GNATS_EYE             = 'GNATS_EYE';
    const GOAD                  = 'GOAD';
    const GRY                   = 'GRY';
    const HAIRS_BREADTH         = 'HAIRS_BREADTH';
    const HAND                  = 'HAND';
    const HANDBREADTH           = 'HANDBREADTH';
    const HAT                   = 'HAT';
    const HECTOMETER            = 'HECTOMETER';
    const HEER                  = 'HEER';
    const HIRO                  = 'HIRO';
    const HUBBLE                = 'HUBBLE';
    const HVAT                  = 'HVAT';
    const INCH                  = 'INCH';
    const IRON                  = 'IRON';
    const KEN                   = 'KEN';
    const KERAT                 = 'KERAT';
    const KILOFOOT              = 'KILOFOOT';
    const KILOMETER             = 'KILOMETER';
    const KILOPARSEC            = 'KILOPARSEC';
    const KILOYARD              = 'KILOYARD';
    const KIND                  = 'KIND';
    const KLAFTER               = 'KLAFTER';
    const KLAFTER_SWISS         = 'KLAFTER_SWISS';
    const KLICK                 = 'KLICK';
    const KYU                   = 'KYU';
    const LAP_ANCIENT           = 'LAP_ANCIENT';
    const LAP                   = 'LAP';
    const LAP_POOL              = 'LAP_POOL';
    const LEAGUE_ANCIENT        = 'LEAGUE_ANCIENT';
    const LEAGUE_NAUTIC         = 'LEAGUE_NAUTIC';
    const LEAGUE_UK_NAUTIC      = 'LEAGUE_UK_NAUTIC';
    const LEAGUE                = 'LEAGUE';
    const LEAGUE_US             = 'LEAGUE_US';
    const LEAP                  = 'LEAP';
    const LEGOA                 = 'LEGOA';
    const LEGUA                 = 'LEGUA';
    const LEGUA_US              = 'LEGUA_US';
    const LEGUA_SPAIN_OLD       = 'LEGUA_SPAIN_OLD';
    const LEGUA_SPAIN           = 'LEGUA_SPAIN';
    const LI_ANCIENT            = 'LI_ANCIENT';
    const LI_IMPERIAL           = 'LI_IMPERIAL';
    const LI                    = 'LI';
    const LIEUE                 = 'LIEUE';
    const LIEUE_METRIC          = 'LIEUE_METRIC';
    const LIEUE_NAUTIC          = 'LIEUE_NAUTIC';
    const LIGHT_SECOND          = 'LIGHT_SECOND';
    const LIGHT_MINUTE          = 'LIGHT_MINUTE';
    const LIGHT_HOUR            = 'LIGHT_HOUR';
    const LIGHT_DAY             = 'LIGHT_DAY';
    const LIGHT_YEAR            = 'LIGHT_YEAR';
    const LIGNE                 = 'LIGNE';
    const LIGNE_SWISS           = 'LIGNE_SWISS';
    const LINE                  = 'LINE';
    const LINE_SMALL            = 'LINE_SMALL';
    const LINK                  = 'LINK';
    const LINK_ENGINEER         = 'LINK_ENGINEER';
    const LUG                   = 'LUG';
    const LUG_GREAT             = 'LUG_GREAT';
    const MARATHON              = 'MARATHON';
    const MARK_TWAIN            = 'MARK_TWAIN';
    const MEGAMETER             = 'MEGAMETER';
    const MEGAPARSEC            = 'MEGAPARSEC';
    const MEILE_AUSTRIAN        = 'MEILE_AUSTRIAN';
    const MEILE                 = 'MEILE';
    const MEILE_GERMAN          = 'MEILE_GERMAN';
    const METER                 = 'METER';
    const METRE                 = 'METRE';
    const METRIC_MILE           = 'METRIC_MILE';
    const METRIC_MILE_US        = 'METRIC_MILE_US';
    const MICROINCH             = 'MICROINCH';
    const MICROMETER            = 'MICROMETER';
    const MICROMICRON           = 'MICROMICRON';
    const MICRON                = 'MICRON';
    const MIGLIO                = 'MIGLIO';
    const MIIL                  = 'MIIL';
    const MIIL_DENMARK          = 'MIIL_DENMARK';
    const MIIL_SWEDISH          = 'MIIL_SWEDISH';
    const MIL                   = 'MIL';
    const MIL_SWEDISH           = 'MIL_SWEDISH';
    const MILE_UK               = 'MILE_UK';
    const MILE_IRISH            = 'MILE_IRISH';
    const MILE                  = 'MILE';
    const MILE_NAUTIC           = 'MILE_NAUTIC';
    const MILE_NAUTIC_UK        = 'MILE_NAUTIC_UK';
    const MILE_NAUTIC_US        = 'MILE_NAUTIC_US';
    const MILE_ANCIENT          = 'MILE_ANCIENT';
    const MILE_SCOTTISH         = 'MILE_SCOTTISH';
    const MILE_STATUTE          = 'MILE_STATUTE';
    const MILE_US               = 'MILE_US';
    const MILHA                 = 'MILHA';
    const MILITARY_PACE         = 'MILITARY_PACE';
    const MILITARY_PACE_DOUBLE  = 'MILITARY_PACE_DOUBLE';
    const MILLA                 = 'MILLA';
    const MILLE                 = 'MILLE';
    const MILLIARE              = 'MILLIARE';
    const MILLIMETER            = 'MILLIMETER';
    const MILLIMICRON           = 'MILLIMICRON';
    const MKONO                 = 'MKONO';
    const MOOT                  = 'MOOT';
    const MYRIAMETER            = 'MYRIAMETER';
    const NAIL                  = 'NAIL';
    const NANOMETER             = 'NANOMETER';
    const NANON                 = 'NANON';
    const PACE                  = 'PACE';
    const PACE_ROMAN            = 'PACE_ROMAN';
    const PALM_DUTCH            = 'PALM_DUTCH';
    const PALM_UK               = 'PALM_UK';
    const PALM                  = 'PALM';
    const PALMO_PORTUGUESE      = 'PALMO_PORTUGUESE';
    const PALMO                 = 'PALMO';
    const PALMO_US              = 'PALMO_US';
    const PARASANG              = 'PARASANG';
    const PARIS_FOOT            = 'PARIS_FOOT';
    const PARSEC                = 'PARSEC';
    const PE                    = 'PE';
    const PEARL                 = 'PEARL';
    const PERCH                 = 'PERCH';
    const PERCH_IRELAND         = 'PERCH_IRELAND';
    const PERTICA               = 'PERTICA';
    const PES                   = 'PES';
    const PETAMETER             = 'PETAMETER';
    const PICA                  = 'PICA';
    const PICOMETER             = 'PICOMETER';
    const PIE_ARGENTINA         = 'PIE_ARGENTINA';
    const PIE_ITALIC            = 'PIE_ITALIC';
    const PIE                   = 'PIE';
    const PIE_US                = 'PIE_US';
    const PIED_DE_ROI           = 'PIED_DE_ROI';
    const PIK                   = 'PIK';
    const PIKE                  = 'PIKE';
    const POINT_ADOBE           = 'POINT_ADOBE';
    const POINT                 = 'POINT';
    const POINT_DIDOT           = 'POINT_DIDOT';
    const POINT_TEX             = 'POINT_TEX';
    const POLE                  = 'POLE';
    const POLEGADA              = 'POLEGADA';
    const POUCE                 = 'POUCE';
    const PU                    = 'PU';
    const PULGADA               = 'PULGADA';
    const PYGME                 = 'PYGME';
    const Q                     = 'Q';
    const QUADRANT              = 'QUADRANT';
    const QUARTER               = 'QUARTER';
    const QUARTER_CLOTH         = 'QUARTER_CLOTH';
    const QUARTER_PRINT         = 'QUARTER_PRINT';
    const RANGE                 = 'RANGE';
    const REED                  = 'REED';
    const RI                    = 'RI';
    const RIDGE                 = 'RIDGE';
    const RIVER                 = 'RIVER';
    const ROD                   = 'ROD';
    const ROD_SURVEY            = 'ROD_SURVEY';
    const ROEDE                 = 'ROEDE';
    const ROOD                  = 'ROOD';
    const ROPE                  = 'ROPE';
    const ROYAL_FOOT            = 'ROYAL_FOOT';
    const RUTE                  = 'RUTE';
    const SADZHEN               = 'SADZHEN';
    const SAGENE                = 'SAGENE';
    const SCOTS_FOOT            = 'SCOTS_FOOT';
    const SCOTS_MILE            = 'SCOTS_MILE';
    const SEEMEILE              = 'SEEMEILE';
    const SHACKLE               = 'SHACKLE';
    const SHAFTMENT             = 'SHAFTMENT';
    const SHAFTMENT_ANCIENT     = 'SHAFTMENT_ANCIENT';
    const SHAKU                 = 'SHAKU';
    const SIRIOMETER            = 'SIRIOMETER';
    const SMOOT                 = 'SMOOT';
    const SPAN                  = 'SPAN';
    const SPAT                  = 'SPAT';
    const STADIUM               = 'STADIUM';
    const STEP                  = 'STEP';
    const STICK                 = 'STICK';
    const STORY                 = 'STORY';
    const STRIDE                = 'STRIDE';
    const STRIDE_ROMAN          = 'STRIDE_ROMAN';
    const TENTHMETER            = 'TENTHMETER';
    const TERAMETER             = 'TERAMETER';
    const THOU                  = 'THOU';
    const TOISE                 = 'TOISE';
    const TOWNSHIP              = 'TOWNSHIP';
    const T_SUN                 = 'T_SUN';
    const TU                    = 'TU';
    const TWAIN                 = 'TWAIN';
    const TWIP                  = 'TWIP';
    const U                     = 'U';
    const VARA_CALIFORNIA       = 'VARA_CALIFORNIA';
    const VARA_MEXICAN          = 'VARA_MEXICAN';
    const VARA_PORTUGUESE       = 'VARA_PORTUGUESE';
    const VARA_AMERICA          = 'VARA_AMERICA';
    const VARA                  = 'VARA';
    const VARA_TEXAS            = 'VARA_TEXAS';
    const VERGE                 = 'VERGE';
    const VERSHOK               = 'VERSHOK';
    const VERST                 = 'VERST';
    const WAH                   = 'WAH';
    const WERST                 = 'WERST';
    const X_UNIT                = 'X_UNIT';
    const YARD                  = 'YARD';
    const YOCTOMETER            = 'YOCTOMETER';
    const YOTTAMETER            = 'YOTTAMETER';
    const ZEPTOMETER            = 'ZEPTOMETER';
    const ZETTAMETER            = 'ZETTAMETER';
    const ZOLL                  = 'ZOLL';
    const ZOLL_SWISS            = 'ZOLL_SWISS';

    /**
     * Calculations for all length units
     *
     * @var array
     */
    protected $_units = [
        'AGATE'           => [['' => '0.0254', '/' => '72'], 'agate'],
        'ALEN_DANISH'     => ['0.6277',           'alen'],
        'ALEN'            => ['0.6',              'alen'],
        'ALEN_SWEDISH'    => ['0.5938',           'alen'],
        'ANGSTROM'        => ['1.0e-10',          'Å'],
        'ARMS'            => ['0.7',              'arms'],
        'ARPENT_CANADIAN' => ['58.47',            'arpent'],
        'ARPENT'          => ['58.471308',        'arpent'],
        'ARSHEEN'         => ['0.7112',           'arsheen'],
        'ARSHIN'          => ['1.04',             'arshin'],
        'ARSHIN_IRAQ'     => ['74.5',             'arshin'],
        'ASTRONOMICAL_UNIT' => ['149597870691',   'AU'],
        'ATTOMETER'       => ['1.0e-18',          'am'],
        'BAMBOO'          => ['3.2',              'bamboo'],
        'BARLEYCORN'      => ['0.0085',           'barleycorn'],
        'BEE_SPACE'       => ['0.0065',           'bee space'],
        'BICRON'          => ['1.0e-12',          'µµ'],
        'BLOCK_US_EAST'   => ['80.4672',          'block'],
        'BLOCK_US_WEST'   => ['100.584',          'block'],
        'BLOCK_US_SOUTH'  => ['160.9344',         'block'],
        'BOHR'            => ['52.918e-12',       'a₀'],
        'BRACCIO'         => ['0.7',              'braccio'],
        'BRAZA_ARGENTINA' => ['1.733',            'braza'],
        'BRAZA'           => ['1.67',             'braza'],
        'BRAZA_US'        => ['1.693',            'braza'],
        'BUTTON'          => ['0.000635',         'button'],
        'CABLE_US'        => ['219.456',          'cable'],
        'CABLE_UK'        => ['185.3184',         'cable'],
        'CALIBER'         => ['0.0254',           'cal'],
        'CANA'            => ['2',                'cana'],
        'CAPE_FOOT'       => ['0.314858',         'cf'],
        'CAPE_INCH'       => [['' => '0.314858','/' => '12'], 'ci'],
        'CAPE_ROOD'       => ['3.778296',         'cr'],
        'CENTIMETER'      => ['0.01',             'cm'],
        'CHAIN'           => [['' => '79200','/' => '3937'],  'ch'],
        'CHAIN_ENGINEER'  => ['30.48',            'ch'],
        'CHIH'            => ['0.35814',          "ch'ih"],
        'CHINESE_FOOT'    => ['0.371475',         'ft'],
        'CHINESE_INCH'    => ['0.0371475',        'in'],
        'CHINESE_MILE'    => ['557.21',           'mi'],
        'CHINESE_YARD'    => ['0.89154',          'yd'],
        'CITY_BLOCK_US_EAST'  => ['80.4672',      'block'],
        'CITY_BLOCK_US_WEST'  => ['100.584',      'block'],
        'CITY_BLOCK_US_SOUTH' => ['160.9344',     'block'],
        'CLICK'           => ['1000',             'click'],
        'CUADRA'          => ['84',               'cuadra'],
        'CUADRA_ARGENTINA'=> ['130',              'cuadra'],
        'Length:CUBIT_EGYPT'      => ['0.45',             'cubit'],
        'CUBIT_ROYAL'     => ['0.5235',           'cubit'],
        'CUBIT_UK'        => ['0.4572',           'cubit'],
        'CUBIT'           => ['0.444',            'cubit'],
        'CUERDA'          => ['21',               'cda'],
        'DECIMETER'       => ['0.1',              'dm'],
        'DEKAMETER'       => ['10',               'dam'],
        'DIDOT_POINT'     => ['0.000377',         'didot point'],
        'DIGIT'           => ['0.019',            'digit'],
        'DIRAA'           => ['0.58',             ''],
        'DONG'            => [['' => '7','/' => '300'], 'dong'],
        'DOUZIEME_WATCH'  => ['0.000188',         'douzième'],
        'DOUZIEME'        => ['0.00017638888889', 'douzième'],
        'DRA_IRAQ'        => ['0.745',            'dra'],
        'DRA'             => ['0.7112',           'dra'],
        'EL'              => ['0.69',             'el'],
        'ELL'             => ['1.143',            'ell'],
        'ELL_SCOTTISH'    => ['0.945',            'ell'],
        'ELLE'            => ['0.6',              'ellen'],
        'ELLE_VIENNA'     => ['0.7793',           'ellen'],
        'EM'              => ['0.0042175176',     'em'],
        'ESTADIO_PORTUGAL'=> ['261',              'estadio'],
        'ESTADIO'         => ['174',              'estadio'],
        'EXAMETER'        => ['1.0e+18',          'Em'],
        'FADEN_AUSTRIA'   => ['1.8965',           'faden'],
        'FADEN'           => ['1.8',              'faden'],
        'FALL'            => ['6.858',            'fall'],
        'FALL_SCOTTISH'   => ['5.67',             'fall'],
        'FATHOM'          => ['1.8288',           'fth'],
        'FATHOM_ANCIENT'  => ['1.829',            'fth'],
        'FAUST'           => ['0.10536',          'faust'],
        'FEET_OLD_CANADIAN' => ['0.325',          'ft'],
        'FEET_EGYPT'      => ['0.36',             'ft'],
        'FEET_FRANCE'     => ['0.3248406',        'ft'],
        'FEET'            => ['0.3048',           'ft'],
        'FEET_IRAQ'       => ['0.316',            'ft'],
        'FEET_NETHERLAND' => ['0.28313',          'ft'],
        'FEET_ITALIC'     => ['0.296',            'ft'],
        'FEET_SURVEY'     => [['' => '1200', '/' => '3937'], 'ft'],
        'FEMTOMETER'      => ['1.0e-15',          'fm'],
        'FERMI'           => ['1.0e-15',          'f'],
        'FINGER'          => ['0.1143',           'finger'],
        'FINGERBREADTH'   => ['0.01905',          'fingerbreadth'],
        'FIST'            => ['0.1',              'fist'],
        'FOD'             => ['0.3141',           'fod'],
        'FOOT_EGYPT'      => ['0.36',             'ft'],
        'FOOT_FRANCE'     => ['0.3248406',        'ft'],
        'FOOT'            => ['0.3048',           'ft'],
        'FOOT_IRAQ'       => ['0.316',            'ft'],
        'FOOT_NETHERLAND' => ['0.28313',          'ft'],
        'FOOT_ITALIC'     => ['0.296',            'ft'],
        'FOOT_SURVEY'     => [['' => '1200', '/' => '3937'], 'ft'],
        'FOOTBALL_FIELD_CANADA' => ['100.584',    'football field'],
        'FOOTBALL_FIELD_US'     => ['91.44',      'football field'],
        'FOOTBALL_FIELD'  => ['109.728',          'football field'],
        'FURLONG'         => ['201.168',          'fur'],
        'FURLONG_SURVEY'  => [['' => '792000', '/' => '3937'], 'fur'],
        'FUSS'            => ['0.31608',          'fuss'],
        'GIGAMETER'       => ['1.0e+9',           'Gm'],
        'GIGAPARSEC'      => ['30.85678e+24',     'Gpc'],
        'GNATS_EYE'       => ['0.000125',         "gnat's eye"],
        'GOAD'            => ['1.3716',           'goad'],
        'GRY'             => ['0.000211667',      'gry'],
        'HAIRS_BREADTH'   => ['0.0001',           "hair's breadth"],
        'HAND'            => ['0.1016',           'hand'],
        'HANDBREADTH'     => ['0.08',             "hand's breadth"],
        'HAT'             => ['0.5',              'hat'],
        'HECTOMETER'      => ['100',              'hm'],
        'HEER'            => ['73.152',           'heer'],
        'HIRO'            => ['1.818',            'hiro'],
        'HUBBLE'          => ['9.4605e+24',       'hubble'],
        'HVAT'            => ['1.8965',           'hvat'],
        'INCH'            => ['0.0254',           'in'],
        'IRON'            => [['' => '0.0254', '/' => '48'], 'iron'],
        'KEN'             => ['1.818',            'ken'],
        'KERAT'           => ['0.0286',           'kerat'],
        'KILOFOOT'        => ['304.8',            'kft'],
        'KILOMETER'       => ['1000',             'km'],
        'KILOPARSEC'      => ['3.0856776e+19',    'kpc'],
        'KILOYARD'        => ['914.4',            'kyd'],
        'KIND'            => ['0.5',              'kind'],
        'KLAFTER'         => ['1.8965',           'klafter'],
        'KLAFTER_SWISS'   => ['1.8',              'klafter'],
        'KLICK'           => ['1000',             'klick'],
        'KYU'             => ['0.00025',          'kyu'],
        'LAP_ANCIENT'     => ['402.336',          ''],
        'LAP'             => ['400',              'lap'],
        'LAP_POOL'        => ['100',              'lap'],
        'LEAGUE_ANCIENT'  => ['2275',             'league'],
        'LEAGUE_NAUTIC'   => ['5556',             'league'],
        'LEAGUE_UK_NAUTIC'=> ['5559.552',         'league'],
        'LEAGUE'          => ['4828',             'league'],
        'LEAGUE_US'       => ['4828.0417',        'league'],
        'LEAP'            => ['2.0574',           'leap'],
        'LEGOA'           => ['6174.1',           'legoa'],
        'LEGUA'           => ['4200',             'legua'],
        'LEGUA_US'        => ['4233.4',           'legua'],
        'LEGUA_SPAIN_OLD' => ['4179.4',           'legua'],
        'LEGUA_SPAIN'     => ['6680',             'legua'],
        'LI_ANCIENT'      => ['500',              'li'],
        'LI_IMPERIAL'     => ['644.65',           'li'],
        'LI'              => ['500',              'li'],
        'LIEUE'           => ['3898',             'lieue'],
        'LIEUE_METRIC'    => ['4000',             'lieue'],
        'LIEUE_NAUTIC'    => ['5556',             'lieue'],
        'LIGHT_SECOND'    => ['299792458',        'light second'],
        'LIGHT_MINUTE'    => ['17987547480',      'light minute'],
        'LIGHT_HOUR'      => ['1079252848800',    'light hour'],
        'LIGHT_DAY'       => ['25902068371200',   'light day'],
        'LIGHT_YEAR'      => ['9460528404879000', 'ly'],
        'LIGNE'           => ['0.0021167',        'ligne'],
        'LIGNE_SWISS'     => ['0.002256',         'ligne'],
        'LINE'            => ['0.0021167',        'li'],
        'LINE_SMALL'      => ['0.000635',         'li'],
        'LINK'            => [['' => '792','/' => '3937'], 'link'],
        'LINK_ENGINEER'   => ['0.3048',           'link'],
        'LUG'             => ['5.0292',           'lug'],
        'LUG_GREAT'       => ['6.4008',           'lug'],
        'MARATHON'        => ['42194.988',        'marathon'],
        'MARK_TWAIN'      => ['3.6576074',        'mark twain'],
        'MEGAMETER'       => ['1000000',          'Mm'],
        'MEGAPARSEC'      => ['3.085677e+22',     'Mpc'],
        'MEILE_AUSTRIAN'  => ['7586',             'meile'],
        'MEILE'           => ['7412.7',           'meile'],
        'MEILE_GERMAN'    => ['7532.5',           'meile'],
        'METER'           => ['1',                'm'],
        'METRE'           => ['1',                'm'],
        'METRIC_MILE'     => ['1500',             'metric mile'],
        'METRIC_MILE_US'  => ['1600',             'metric mile'],
        'MICROINCH'       => ['2.54e-08',         'µin'],
        'MICROMETER'      => ['0.000001',         'µm'],
        'MICROMICRON'     => ['1.0e-12',          'µµ'],
        'MICRON'          => ['0.000001',         'µm'],
        'MIGLIO'          => ['1488.6',           'miglio'],
        'MIIL'            => ['7500',             'miil'],
        'MIIL_DENMARK'    => ['7532.5',           'miil'],
        'MIIL_SWEDISH'    => ['10687',            'miil'],
        'MIL'             => ['0.0000254',        'mil'],
        'MIL_SWEDISH'     => ['10000',            'mil'],
        'MILE_UK'         => ['1609',             'mi'],
        'MILE_IRISH'      => ['2048',             'mi'],
        'MILE'            => ['1609.344',         'mi'],
        'MILE_NAUTIC'     => ['1852',             'mi'],
        'MILE_NAUTIC_UK'  => ['1853.184',         'mi'],
        'MILE_NAUTIC_US'  => ['1852',             'mi'],
        'MILE_ANCIENT'    => ['1520',             'mi'],
        'MILE_SCOTTISH'   => ['1814',             'mi'],
        'MILE_STATUTE'    => ['1609.344',         'mi'],
        'MILE_US'         => [['' => '6336000','/' => '3937'], 'mi'],
        'MILHA'           => ['2087.3',           'milha'],
        'MILITARY_PACE'   => ['0.762',            'mil. pace'],
        'MILITARY_PACE_DOUBLE' => ['0.9144',      'mil. pace'],
        'MILLA'           => ['1392',             'milla'],
        'MILLE'           => ['1949',             'mille'],
        'MILLIARE'        => ['0.001478',         'milliare'],
        'MILLIMETER'      => ['0.001',            'mm'],
        'MILLIMICRON'     => ['1.0e-9',           'mµ'],
        'MKONO'           => ['0.4572',           'mkono'],
        'MOOT'            => ['0.0762',           'moot'],
        'MYRIAMETER'      => ['10000',            'mym'],
        'NAIL'            => ['0.05715',          'nail'],
        'NANOMETER'       => ['1.0e-9',           'nm'],
        'NANON'           => ['1.0e-9',           'nanon'],
        'PACE'            => ['1.524',            'pace'],
        'PACE_ROMAN'      => ['1.48',             'pace'],
        'PALM_DUTCH'      => ['0.10',             'palm'],
        'PALM_UK'         => ['0.075',            'palm'],
        'PALM'            => ['0.2286',           'palm'],
        'PALMO_PORTUGUESE'=> ['0.22',             'palmo'],
        'PALMO'           => ['0.20',             'palmo'],
        'PALMO_US'        => ['0.2117',           'palmo'],
        'PARASANG'        => ['6000',             'parasang'],
        'PARIS_FOOT'      => ['0.3248406',        'paris foot'],
        'PARSEC'          => ['3.0856776e+16',    'pc'],
        'PE'              => ['0.33324',          'pé'],
        'PEARL'           => ['0.001757299',      'pearl'],
        'PERCH'           => ['5.0292',           'perch'],
        'PERCH_IRELAND'   => ['6.4008',           'perch'],
        'PERTICA'         => ['2.96',             'pertica'],
        'PES'             => ['0.2967',           'pes'],
        'PETAMETER'       => ['1.0e+15',          'Pm'],
        'PICA'            => ['0.0042175176',     'pi'],
        'PICOMETER'       => ['1.0e-12',          'pm'],
        'PIE_ARGENTINA'   => ['0.2889',           'pie'],
        'PIE_ITALIC'      => ['0.298',            'pie'],
        'PIE'             => ['0.2786',           'pie'],
        'PIE_US'          => ['0.2822',           'pie'],
        'PIED_DE_ROI'     => ['0.3248406',        'pied de roi'],
        'PIK'             => ['0.71',             'pik'],
        'PIKE'            => ['0.71',             'pike'],
        'POINT_ADOBE'     => [['' => '0.3048', '/' => '864'], 'pt'],
        'POINT'           => ['0.00035',          'pt'],
        'POINT_DIDOT'     => ['0.000377',         'pt'],
        'POINT_TEX'       => ['0.0003514598035',  'pt'],
        'POLE'            => ['5.0292',           'pole'],
        'POLEGADA'        => ['0.02777',          'polegada'],
        'POUCE'           => ['0.02707',          'pouce'],
        'PU'              => ['1.7907',           'pu'],
        'PULGADA'         => ['0.02365',          'pulgada'],
        'PYGME'           => ['0.346',            'pygme'],
        'Q'               => ['0.00025',          'q'],
        'QUADRANT'        => ['10001300',         'quad'],
        'QUARTER'         => ['402.336',          'Q'],
        'QUARTER_CLOTH'   => ['0.2286',           'Q'],
        'QUARTER_PRINT'   => ['0.00025',          'Q'],
        'RANGE'           => [['' => '38016000','/' => '3937'], 'range'],
        'REED'            => ['2.679',            'reed'],
        'RI'              => ['3927',             'ri'],
        'RIDGE'           => ['6.1722',           'ridge'],
        'RIVER'           => ['2000',             'river'],
        'ROD'             => ['5.0292',           'rd'],
        'ROD_SURVEY'      => [['' => '19800', '/' => '3937'], 'rd'],
        'ROEDE'           => ['10',               'roede'],
        'ROOD'            => ['3.7783',           'rood'],
        'ROPE'            => ['3.7783',           'rope'],
        'ROYAL_FOOT'      => ['0.3248406',        'royal foot'],
        'RUTE'            => ['3.75',             'rute'],
        'SADZHEN'         => ['2.1336',           'sadzhen'],
        'SAGENE'          => ['2.1336',           'sagene'],
        'SCOTS_FOOT'      => ['0.30645',          'scots foot'],
        'SCOTS_MILE'      => ['1814.2',           'scots mile'],
        'SEEMEILE'        => ['1852',             'seemeile'],
        'SHACKLE'         => ['27.432',           'shackle'],
        'SHAFTMENT'       => ['0.15124',          'shaftment'],
        'SHAFTMENT_ANCIENT' => ['0.165',          'shaftment'],
        'SHAKU'           => ['0.303',            'shaku'],
        'SIRIOMETER'      => ['1.4959787e+17',    'siriometer'],
        'SMOOT'           => ['1.7018',           'smoot'],
        'SPAN'            => ['0.2286',           'span'],
        'SPAT'            => ['1.0e+12',          'spat'],
        'STADIUM'         => ['185',              'stadium'],
        'STEP'            => ['0.762',            'step'],
        'STICK'           => ['3.048',            'stk'],
        'STORY'           => ['3.3',              'story'],
        'STRIDE'          => ['1.524',            'stride'],
        'STRIDE_ROMAN'    => ['1.48',             'stride'],
        'TENTHMETER'      => ['1.0e-10',          'tenth-meter'],
        'TERAMETER'       => ['1.0e+12',          'Tm'],
        'THOU'            => ['0.0000254',        'thou'],
        'TOISE'           => ['1.949',            'toise'],
        'TOWNSHIP'        => [['' => '38016000','/' => '3937'], 'twp'],
        'T_SUN'           => ['0.0358',           "t'sun"],
        'TU'              => ['161130',           'tu'],
        'TWAIN'           => ['3.6576074',        'twain'],
        'TWIP'            => ['0.000017639',      'twip'],
        'U'               => ['0.04445',          'U'],
        'VARA_CALIFORNIA' => ['0.83820168',       'vara'],
        'VARA_MEXICAN'    => ['0.83802',          'vara'],
        'VARA_PORTUGUESE' => ['1.10',             'vara'],
        'VARA_AMERICA'    => ['0.864',            'vara'],
        'VARA'            => ['0.83587',          'vara'],
        'VARA_TEXAS'      => ['0.84666836',       'vara'],
        'VERGE'           => ['0.9144',           'verge'],
        'VERSHOK'         => ['0.04445',          'vershok'],
        'VERST'           => ['1066.8',           'verst'],
        'WAH'             => ['2',                'wah'],
        'WERST'           => ['1066.8',           'werst'],
        'X_UNIT'          => ['1.0020722e-13',    'Xu'],
        'YARD'            => ['0.9144',           'yd'],
        'YOCTOMETER'      => ['1.0e-24',          'ym'],
        'YOTTAMETER'      => ['1.0e+24',          'Ym'],
        'ZEPTOMETER'      => ['1.0e-21',          'zm'],
        'ZETTAMETER'      => ['1.0e+21',          'Zm'],
        'ZOLL'            => ['0.02634',          'zoll'],
        'ZOLL_SWISS'      => ['0.03',             'zoll'],
        'STANDARD'        => 'METER'
    ];
}
