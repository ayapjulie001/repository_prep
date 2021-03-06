<?php
/**
 * Created JulieAnnAyap
 * Date: 1/8/2015
 * Time: 9:51 PM
 */


use Faker\Factory as Faker;

class CountriesDataSeeder extends Seeder{

    protected $faker;

    public function __construct()
    {
        Country::truncate();
        $this->faker = Faker::create();
    }

    public function run()
    {
        $attributes = array('iso2', 'short_name', 'long_name', 'iso3', 'iso_number', 'un_member', 'country_code', 'cctld');
        $countries = array(
            array('AF', 'Afghanistan', 'Islamic Republic of Afghanistan', 'AFG', '004', 'yes', '93', '.af'),
            array('AX', 'Aland Islands', '&Aring;land Islands', 'ALA', '248', 'no', '358', '.ax'),
            array('AL', 'Albania', 'Republic of Albania', 'ALB', '008', 'yes', '355', '.al'),
            array('DZ', 'Algeria', 'People\'s Democratic Republic of Algeria', 'DZA', '012', 'yes', '213', '.dz'),
            array('AS', 'American Samoa', 'American Samoa', 'ASM', '016', 'no', '1+684', '.as'),
            array('AD', 'Andorra', 'Principality of Andorra', 'AND', '020', 'yes', '376', '.ad'),
            array('AO', 'Angola', 'Republic of Angola', 'AGO', '024', 'yes', '244', '.ao'),
            array('AI', 'Anguilla', 'Anguilla', 'AIA', '660', 'no', '1+264', '.ai'),
            array('AQ', 'Antarctica', 'Antarctica', 'ATA', '010', 'no', '672', '.aq'),
            array('AG', 'Antigua and Barbuda', 'Antigua and Barbuda', 'ATG', '028', 'yes', '1+268', '.ag'),
            array('AR', 'Argentina', 'Argentine Republic', 'ARG', '032', 'yes', '54', '.ar'),
            array('AM', 'Armenia', 'Republic of Armenia', 'ARM', '051', 'yes', '374', '.am'),
            array('AW', 'Aruba', 'Aruba', 'ABW', '533', 'no', '297', '.aw'),
            array('AU', 'Australia', 'Commonwealth of Australia', 'AUS', '036', 'yes', '61', '.au'),
            array('AT', 'Austria', 'Republic of Austria', 'AUT', '040', 'yes', '43', '.at'),
            array('AZ', 'Azerbaijan', 'Republic of Azerbaijan', 'AZE', '031', 'yes', '994', '.az'),
            array('BS', 'Bahamas', 'Commonwealth of The Bahamas', 'BHS', '044', 'yes', '1+242', '.bs'),
            array('BH', 'Bahrain', 'Kingdom of Bahrain', 'BHR', '048', 'yes', '973', '.bh'),
            array('BD', 'Bangladesh', 'People\'s Republic of Bangladesh', 'BGD', '050', 'yes', '880', '.bd'),
            array('BB', 'Barbados', 'Barbados', 'BRB', '052', 'yes', '1+246', '.bb'),
            array('BY', 'Belarus', 'Republic of Belarus', 'BLR', '112', 'yes', '375', '.by'),
            array('BE', 'Belgium', 'Kingdom of Belgium', 'BEL', '056', 'yes', '32', '.be'),
            array('BZ', 'Belize', 'Belize', 'BLZ', '084', 'yes', '501', '.bz'),
            array('BJ', 'Benin', 'Republic of Benin', 'BEN', '204', 'yes', '229', '.bj'),
            array('BM', 'Bermuda', 'Bermuda Islands', 'BMU', '060', 'no', '1+441', '.bm'),
            array('BT', 'Bhutan', 'Kingdom of Bhutan', 'BTN', '064', 'yes', '975', '.bt'),
            array('BO', 'Bolivia', 'Plurinational State of Bolivia', 'BOL', '068', 'yes', '591', '.bo'),
            array('BQ', 'Bonaire, Sint Eustatius and Saba', 'Bonaire, Sint Eustatius and Saba', 'BES', '535', 'no', '599', '.bq'),
            array('BA', 'Bosnia and Herzegovina', 'Bosnia and Herzegovina', 'BIH', '070', 'yes', '387', '.ba'),
            array('BW', 'Botswana', 'Republic of Botswana', 'BWA', '072', 'yes', '267', '.bw'),
            array('BV', 'Bouvet Island', 'Bouvet Island', 'BVT', '074', 'no', 'NONE', '.bv'),
            array('BR', 'Brazil', 'Federative Republic of Brazil', 'BRA', '076', 'yes', '55', '.br'),
            array('IO', 'British Indian Ocean Territory', 'British Indian Ocean Territory', 'IOT', '086', 'no', '246', '.io'),
            array('BN', 'Brunei', 'Brunei Darussalam', 'BRN', '096', 'yes', '673', '.bn'),
            array('BG', 'Bulgaria', 'Republic of Bulgaria', 'BGR', '100', 'yes', '359', '.bg'),
            array('BF', 'Burkina Faso', 'Burkina Faso', 'BFA', '854', 'yes', '226', '.bf'),
            array('BI', 'Burundi', 'Republic of Burundi', 'BDI', '108', 'yes', '257', '.bi'),
            array('KH', 'Cambodia', 'Kingdom of Cambodia', 'KHM', '116', 'yes', '855', '.kh'),
            array('CM', 'Cameroon', 'Republic of Cameroon', 'CMR', '120', 'yes', '237', '.cm'),
            array('CA', 'Canada', 'Canada', 'CAN', '124', 'yes', '1', '.ca'),
            array('CV', 'Cape Verde', 'Republic of Cape Verde', 'CPV', '132', 'yes', '238', '.cv'),
            array('KY', 'Cayman Islands', 'The Cayman Islands', 'CYM', '136', 'no', '1+345', '.ky'),
            array('CF', 'Central African Republic', 'Central African Republic', 'CAF', '140', 'yes', '236', '.cf'),
            array('TD', 'Chad', 'Republic of Chad', 'TCD', '148', 'yes', '235', '.td'),
            array('CL', 'Chile', 'Republic of Chile', 'CHL', '152', 'yes', '56', '.cl'),
            array('CN', 'China', 'People\'s Republic of China', 'CHN', '156', 'yes', '86', '.cn'),
            array('CX', 'Christmas Island', 'Christmas Island', 'CXR', '162', 'no', '61', '.cx'),
            array('CC', 'Cocos (Keeling) Islands', 'Cocos (Keeling) Islands', 'CCK', '166', 'no', '61', '.cc'),
            array('CO', 'Colombia', 'Republic of Colombia', 'COL', '170', 'yes', '57', '.co'),
            array('KM', 'Comoros', 'Union of the Comoros', 'COM', '174', 'yes', '269', '.km'),
            array('CG', 'Congo', 'Republic of the Congo', 'COG', '178', 'yes', '242', '.cg'),
            array('CK', 'Cook Islands', 'Cook Islands', 'COK', '184', 'some', '682', '.ck'),
            array('CR', 'Costa Rica', 'Republic of Costa Rica', 'CRI', '188', 'yes', '506', '.cr'),
            array('CI', 'Cote d\'ivoire (Ivory Coast)', 'Republic of C&ocirc;te D\'Ivoire (Ivory Coast)', 'CIV', '384', 'yes', '225', '.ci'),
            array('HR', 'Croatia', 'Republic of Croatia', 'HRV', '191', 'yes', '385', '.hr'),
            array('CU', 'Cuba', 'Republic of Cuba', 'CUB', '192', 'yes', '53', '.cu'),
            array('CW', 'Curacao', 'Cura&ccedil;ao', 'CUW', '531', 'no', '599', '.cw'),
            array('CY', 'Cyprus', 'Republic of Cyprus', 'CYP', '196', 'yes', '357', '.cy'),
            array('CZ', 'Czech Republic', 'Czech Republic', 'CZE', '203', 'yes', '420', '.cz'),
            array('CD', 'Democratic Republic of the Congo', 'Democratic Republic of the Congo', 'COD', '180', 'yes', '243', '.cd'),
            array('DK', 'Denmark', 'Kingdom of Denmark', 'DNK', '208', 'yes', '45', '.dk'),
            array('DJ', 'Djibouti', 'Republic of Djibouti', 'DJI', '262', 'yes', '253', '.dj'),
            array('DM', 'Dominica', 'Commonwealth of Dominica', 'DMA', '212', 'yes', '1+767', '.dm'),
            array('DO', 'Dominican Republic', 'Dominican Republic', 'DOM', '214', 'yes', '1+809, 8', '.do'),
            array('EC', 'Ecuador', 'Republic of Ecuador', 'ECU', '218', 'yes', '593', '.ec'),
            array('EG', 'Egypt', 'Arab Republic of Egypt', 'EGY', '818', 'yes', '20', '.eg'),
            array('SV', 'El Salvador', 'Republic of El Salvador', 'SLV', '222', 'yes', '503', '.sv'),
            array('GQ', 'Equatorial Guinea', 'Republic of Equatorial Guinea', 'GNQ', '226', 'yes', '240', '.gq'),
            array('ER', 'Eritrea', 'State of Eritrea', 'ERI', '232', 'yes', '291', '.er'),
            array('EE', 'Estonia', 'Republic of Estonia', 'EST', '233', 'yes', '372', '.ee'),
            array('ET', 'Ethiopia', 'Federal Democratic Republic of Ethiopia', 'ETH', '231', 'yes', '251', '.et'),
            array('FK', 'Falkland Islands (Malvinas)', 'The Falkland Islands (Malvinas)', 'FLK', '238', 'no', '500', '.fk'),
            array('FO', 'Faroe Islands', 'The Faroe Islands', 'FRO', '234', 'no', '298', '.fo'),
            array('FJ', 'Fiji', 'Republic of Fiji', 'FJI', '242', 'yes', '679', '.fj'),
            array('FI', 'Finland', 'Republic of Finland', 'FIN', '246', 'yes', '358', '.fi'),
            array('FR', 'France', 'French Republic', 'FRA', '250', 'yes', '33', '.fr'),
            array('GF', 'French Guiana', 'French Guiana', 'GUF', '254', 'no', '594', '.gf'),
            array('PF', 'French Polynesia', 'French Polynesia', 'PYF', '258', 'no', '689', '.pf'),
            array('TF', 'French Southern Territories', 'French Southern Territories', 'ATF', '260', 'no', NULL, '.tf'),
            array('GA', 'Gabon', 'Gabonese Republic', 'GAB', '266', 'yes', '241', '.ga'),
            array('GM', 'Gambia', 'Republic of The Gambia', 'GMB', '270', 'yes', '220', '.gm'),
            array('GE', 'Georgia', 'Georgia', 'GEO', '268', 'yes', '995', '.ge'),
            array('DE', 'Germany', 'Federal Republic of Germany', 'DEU', '276', 'yes', '49', '.de'),
            array('GH', 'Ghana', 'Republic of Ghana', 'GHA', '288', 'yes', '233', '.gh'),
            array('GI', 'Gibraltar', 'Gibraltar', 'GIB', '292', 'no', '350', '.gi'),
            array('GR', 'Greece', 'Hellenic Republic', 'GRC', '300', 'yes', '30', '.gr'),
            array('GL', 'Greenland', 'Greenland', 'GRL', '304', 'no', '299', '.gl'),
            array('GD', 'Grenada', 'Grenada', 'GRD', '308', 'yes', '1+473', '.gd'),
            array('GP', 'Guadaloupe', 'Guadeloupe', 'GLP', '312', 'no', '590', '.gp'),
            array('GU', 'Guam', 'Guam', 'GUM', '316', 'no', '1+671', '.gu'),
            array('GT', 'Guatemala', 'Republic of Guatemala', 'GTM', '320', 'yes', '502', '.gt'),
            array('GG', 'Guernsey', 'Guernsey', 'GGY', '831', 'no', '44', '.gg'),
            array('GN', 'Guinea', 'Republic of Guinea', 'GIN', '324', 'yes', '224', '.gn'),
            array('GW', 'Guinea-Bissau', 'Republic of Guinea-Bissau', 'GNB', '624', 'yes', '245', '.gw'),
            array('GY', 'Guyana', 'Co-operative Republic of Guyana', 'GUY', '328', 'yes', '592', '.gy'),
            array('HT', 'Haiti', 'Republic of Haiti', 'HTI', '332', 'yes', '509', '.ht'),
            array('HM', 'Heard Island and McDonald Islands', 'Heard Island and McDonald Islands', 'HMD', '334', 'no', 'NONE', '.hm'),
            array('HN', 'Honduras', 'Republic of Honduras', 'HND', '340', 'yes', '504', '.hn'),
            array('HK', 'Hong Kong', 'Hong Kong', 'HKG', '344', 'no', '852', '.hk'),
            array('HU', 'Hungary', 'Hungary', 'HUN', '348', 'yes', '36', '.hu'),
            array('IS', 'Iceland', 'Republic of Iceland', 'ISL', '352', 'yes', '354', '.is'),
            array('IN', 'India', 'Republic of India', 'IND', '356', 'yes', '91', '.in'),
            array('ID', 'Indonesia', 'Republic of Indonesia', 'IDN', '360', 'yes', '62', '.id'),
            array('IR', 'Iran', 'Islamic Republic of Iran', 'IRN', '364', 'yes', '98', '.ir'),
            array('IQ', 'Iraq', 'Republic of Iraq', 'IRQ', '368', 'yes', '964', '.iq'),
            array('IE', 'Ireland', 'Ireland', 'IRL', '372', 'yes', '353', '.ie'),
            array('IM', 'Isle of Man', 'Isle of Man', 'IMN', '833', 'no', '44', '.im'),
            array('IL', 'Israel', 'State of Israel', 'ISR', '376', 'yes', '972', '.il'),
            array('IT', 'Italy', 'Italian Republic', 'ITA', '380', 'yes', '39', '.jm'),
            array('JM', 'Jamaica', 'Jamaica', 'JAM', '388', 'yes', '1+876', '.jm'),
            array('JP', 'Japan', 'Japan', 'JPN', '392', 'yes', '81', '.jp'),
            array('JE', 'Jersey', 'The Bailiwick of Jersey', 'JEY', '832', 'no', '44', '.je'),
            array('JO', 'Jordan', 'Hashemite Kingdom of Jordan', 'JOR', '400', 'yes', '962', '.jo'),
            array('KZ', 'Kazakhstan', 'Republic of Kazakhstan', 'KAZ', '398', 'yes', '7', '.kz'),
            array('KE', 'Kenya', 'Republic of Kenya', 'KEN', '404', 'yes', '254', '.ke'),
            array('KI', 'Kiribati', 'Republic of Kiribati', 'KIR', '296', 'yes', '686', '.ki'),
            array('XK', 'Kosovo', 'Republic of Kosovo', '---', '---', 'some', '381', ''),
            array('KW', 'Kuwait', 'State of Kuwait', 'KWT', '414', 'yes', '965', '.kw'),
            array('KG', 'Kyrgyzstan', 'Kyrgyz Republic', 'KGZ', '417', 'yes', '996', '.kg'),
            array('LA', 'Laos', 'Lao People\'s Democratic Republic', 'LAO', '418', 'yes', '856', '.la'),
            array('LV', 'Latvia', 'Republic of Latvia', 'LVA', '428', 'yes', '371', '.lv'),
            array('LB', 'Lebanon', 'Republic of Lebanon', 'LBN', '422', 'yes', '961', '.lb'),
            array('LS', 'Lesotho', 'Kingdom of Lesotho', 'LSO', '426', 'yes', '266', '.ls'),
            array('LR', 'Liberia', 'Republic of Liberia', 'LBR', '430', 'yes', '231', '.lr'),
            array('LY', 'Libya', 'Libya', 'LBY', '434', 'yes', '218', '.ly'),
            array('LI', 'Liechtenstein', 'Principality of Liechtenstein', 'LIE', '438', 'yes', '423', '.li'),
            array('LT', 'Lithuania', 'Republic of Lithuania', 'LTU', '440', 'yes', '370', '.lt'),
            array('LU', 'Luxembourg', 'Grand Duchy of Luxembourg', 'LUX', '442', 'yes', '352', '.lu'),
            array('MO', 'Macao', 'The Macao Special Administrative Region', 'MAC', '446', 'no', '853', '.mo'),
            array('MK', 'Macedonia', 'The Former Yugoslav Republic of Macedonia', 'MKD', '807', 'yes', '389', '.mk'),
            array('MG', 'Madagascar', 'Republic of Madagascar', 'MDG', '450', 'yes', '261', '.mg'),
            array('MW', 'Malawi', 'Republic of Malawi', 'MWI', '454', 'yes', '265', '.mw'),
            array('MY', 'Malaysia', 'Malaysia', 'MYS', '458', 'yes', '60', '.my'),
            array('MV', 'Maldives', 'Republic of Maldives', 'MDV', '462', 'yes', '960', '.mv'),
            array('ML', 'Mali', 'Republic of Mali', 'MLI', '466', 'yes', '223', '.ml'),
            array('MT', 'Malta', 'Republic of Malta', 'MLT', '470', 'yes', '356', '.mt'),
            array('MH', 'Marshall Islands', 'Republic of the Marshall Islands', 'MHL', '584', 'yes', '692', '.mh'),
            array('MQ', 'Martinique', 'Martinique', 'MTQ', '474', 'no', '596', '.mq'),
            array('MR', 'Mauritania', 'Islamic Republic of Mauritania', 'MRT', '478', 'yes', '222', '.mr'),
            array('MU', 'Mauritius', 'Republic of Mauritius', 'MUS', '480', 'yes', '230', '.mu'),
            array('YT', 'Mayotte', 'Mayotte', 'MYT', '175', 'no', '262', '.yt'),
            array('MX', 'Mexico', 'United Mexican States', 'MEX', '484', 'yes', '52', '.mx'),
            array('FM', 'Micronesia', 'Federated States of Micronesia', 'FSM', '583', 'yes', '691', '.fm'),
            array('MD', 'Moldava', 'Republic of Moldova', 'MDA', '498', 'yes', '373', '.md'),
            array('MC', 'Monaco', 'Principality of Monaco', 'MCO', '492', 'yes', '377', '.mc'),
            array('MN', 'Mongolia', 'Mongolia', 'MNG', '496', 'yes', '976', '.mn'),
            array('ME', 'Montenegro', 'Montenegro', 'MNE', '499', 'yes', '382', '.me'),
            array('MS', 'Montserrat', 'Montserrat', 'MSR', '500', 'no', '1+664', '.ms'),
            array('MA', 'Morocco', 'Kingdom of Morocco', 'MAR', '504', 'yes', '212', '.ma'),
            array('MZ', 'Mozambique', 'Republic of Mozambique', 'MOZ', '508', 'yes', '258', '.mz'),
            array('MM', 'Myanmar (Burma)', 'Republic of the Union of Myanmar', 'MMR', '104', 'yes', '95', '.mm'),
            array('NA', 'Namibia', 'Republic of Namibia', 'NAM', '516', 'yes', '264', '.na'),
            array('NR', 'Nauru', 'Republic of Nauru', 'NRU', '520', 'yes', '674', '.nr'),
            array('NP', 'Nepal', 'Federal Democratic Republic of Nepal', 'NPL', '524', 'yes', '977', '.np'),
            array('NL', 'Netherlands', 'Kingdom of the Netherlands', 'NLD', '528', 'yes', '31', '.nl'),
            array('NC', 'New Caledonia', 'New Caledonia', 'NCL', '540', 'no', '687', '.nc'),
            array('NZ', 'New Zealand', 'New Zealand', 'NZL', '554', 'yes', '64', '.nz'),
            array('NI', 'Nicaragua', 'Republic of Nicaragua', 'NIC', '558', 'yes', '505', '.ni'),
            array('NE', 'Niger', 'Republic of Niger', 'NER', '562', 'yes', '227', '.ne'),
            array('NG', 'Nigeria', 'Federal Republic of Nigeria', 'NGA', '566', 'yes', '234', '.ng'),
            array('NU', 'Niue', 'Niue', 'NIU', '570', 'some', '683', '.nu'),
            array('NF', 'Norfolk Island', 'Norfolk Island', 'NFK', '574', 'no', '672', '.nf'),
            array('KP', 'North Korea', 'Democratic People\'s Republic of Korea', 'PRK', '408', 'yes', '850', '.kp'),
            array('MP', 'Northern Mariana Islands', 'Northern Mariana Islands', 'MNP', '580', 'no', '1+670', '.mp'),
            array('NO', 'Norway', 'Kingdom of Norway', 'NOR', '578', 'yes', '47', '.no'),
            array('OM', 'Oman', 'Sultanate of Oman', 'OMN', '512', 'yes', '968', '.om'),
            array('PK', 'Pakistan', 'Islamic Republic of Pakistan', 'PAK', '586', 'yes', '92', '.pk'),
            array('PW', 'Palau', 'Republic of Palau', 'PLW', '585', 'yes', '680', '.pw'),
            array('PS', 'Palestine', 'State of Palestine array(or Occupied Palestinian Territory)', 'PSE', '275', 'some', '970', '.ps'),
            array('PA', 'Panama', 'Republic of Panama', 'PAN', '591', 'yes', '507', '.pa'),
            array('PG', 'Papua New Guinea', 'Independent State of Papua New Guinea', 'PNG', '598', 'yes', '675', '.pg'),
            array('PY', 'Paraguay', 'Republic of Paraguay', 'PRY', '600', 'yes', '595', '.py'),
            array('PE', 'Peru', 'Republic of Peru', 'PER', '604', 'yes', '51', '.pe'),
            array('PH', 'Phillipines', 'Republic of the Philippines', 'PHL', '608', 'yes', '63', '.ph'),
            array('PN', 'Pitcairn', 'Pitcairn', 'PCN', '612', 'no', 'NONE', '.pn'),
            array('PL', 'Poland', 'Republic of Poland', 'POL', '616', 'yes', '48', '.pl'),
            array('PT', 'Portugal', 'Portuguese Republic', 'PRT', '620', 'yes', '351', '.pt'),
            array('PR', 'Puerto Rico', 'Commonwealth of Puerto Rico', 'PRI', '630', 'no', '1+939', '.pr'),
            array('QA', 'Qatar', 'State of Qatar', 'QAT', '634', 'yes', '974', '.qa'),
            array('RE', 'Reunion', 'R&eacute;union', 'REU', '638', 'no', '262', '.re'),
            array('RO', 'Romania', 'Romania', 'ROU', '642', 'yes', '40', '.ro'),
            array('RU', 'Russia', 'Russian Federation', 'RUS', '643', 'yes', '7', '.ru'),
            array('RW', 'Rwanda', 'Republic of Rwanda', 'RWA', '646', 'yes', '250', '.rw'),
            array('BL', 'Saint Barthelemy', 'Saint Barth&eacute;lemy', 'BLM', '652', 'no', '590', '.bl'),
            array('SH', 'Saint Helena', 'Saint Helena, Ascension and Tristan da Cunha', 'SHN', '654', 'no', '290', '.sh'),
            array('KN', 'Saint Kitts and Nevis', 'Federation of Saint Christopher and Nevis', 'KNA', '659', 'yes', '1+869', '.kn'),
            array('LC', 'Saint Lucia', 'Saint Lucia', 'LCA', '662', 'yes', '1+758', '.lc'),
            array('MF', 'Saint Martin', 'Saint Martin', 'MAF', '663', 'no', '590', '.mf'),
            array('PM', 'Saint Pierre and Miquelon', 'Saint Pierre and Miquelon', 'SPM', '666', 'no', '508', '.pm'),
            array('VC', 'Saint Vincent and the Grenadines', 'Saint Vincent and the Grenadines', 'VCT', '670', 'yes', '1+784', '.vc'),
            array('WS', 'Samoa', 'Independent State of Samoa', 'WSM', '882', 'yes', '685', '.ws'),
            array('SM', 'San Marino', 'Republic of San Marino', 'SMR', '674', 'yes', '378', '.sm'),
            array('ST', 'Sao Tome and Principe', 'Democratic Republic of S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'STP', '678', 'yes', '239', '.st'),
            array('SA', 'Saudi Arabia', 'Kingdom of Saudi Arabia', 'SAU', '682', 'yes', '966', '.sa'),
            array('SN', 'Senegal', 'Republic of Senegal', 'SEN', '686', 'yes', '221', '.sn'),
            array('RS', 'Serbia', 'Republic of Serbia', 'SRB', '688', 'yes', '381', '.rs'),
            array('SC', 'Seychelles', 'Republic of Seychelles', 'SYC', '690', 'yes', '248', '.sc'),
            array('SL', 'Sierra Leone', 'Republic of Sierra Leone', 'SLE', '694', 'yes', '232', '.sl'),
            array('SG', 'Singapore', 'Republic of Singapore', 'SGP', '702', 'yes', '65', '.sg'),
            array('SX', 'Sint Maarten', 'Sint Maarten', 'SXM', '534', 'no', '1+721', '.sx'),
            array('SK', 'Slovakia', 'Slovak Republic', 'SVK', '703', 'yes', '421', '.sk'),
            array('SI', 'Slovenia', 'Republic of Slovenia', 'SVN', '705', 'yes', '386', '.si'),
            array('SB', 'Solomon Islands', 'Solomon Islands', 'SLB', '090', 'yes', '677', '.sb'),
            array('SO', 'Somalia', 'Somali Republic', 'SOM', '706', 'yes', '252', '.so'),
            array('ZA', 'South Africa', 'Republic of South Africa', 'ZAF', '710', 'yes', '27', '.za'),
            array('GS', 'South Georgia and the South Sandwich Islands', 'South Georgia and the South Sandwich Islands', 'SGS', '239', 'no', '500', '.gs'),
            array('KR', 'South Korea', 'Republic of Korea', 'KOR', '410', 'yes', '82', '.kr'),
            array('SS', 'South Sudan', 'Republic of South Sudan', 'SSD', '728', 'yes', '211', '.ss'),
            array('ES', 'Spain', 'Kingdom of Spain', 'ESP', '724', 'yes', '34', '.es'),
            array('LK', 'Sri Lanka', 'Democratic Socialist Republic of Sri Lanka', 'LKA', '144', 'yes', '94', '.lk'),
            array('SD', 'Sudan', 'Republic of the Sudan', 'SDN', '729', 'yes', '249', '.sd'),
            array('SR', 'Suriname', 'Republic of Suriname', 'SUR', '740', 'yes', '597', '.sr'),
            array('SJ', 'Svalbard and Jan Mayen', 'Svalbard and Jan Mayen', 'SJM', '744', 'no', '47', '.sj'),
            array('SZ', 'Swaziland', 'Kingdom of Swaziland', 'SWZ', '748', 'yes', '268', '.sz'),
            array('SE', 'Sweden', 'Kingdom of Sweden', 'SWE', '752', 'yes', '46', '.se'),
            array('CH', 'Switzerland', 'Swiss Confederation', 'CHE', '756', 'yes', '41', '.ch'),
            array('SY', 'Syria', 'Syrian Arab Republic', 'SYR', '760', 'yes', '963', '.sy'),
            array('TW', 'Taiwan', 'Republic of China (Taiwan)', 'TWN', '158', 'former', '886', '.tw'),
            array('TJ', 'Tajikistan', 'Republic of Tajikistan', 'TJK', '762', 'yes', '992', '.tj'),
            array('TZ', 'Tanzania', 'United Republic of Tanzania', 'TZA', '834', 'yes', '255', '.tz'),
            array('TH', 'Thailand', 'Kingdom of Thailand', 'THA', '764', 'yes', '66', '.th'),
            array('TL', 'Timor-Leste (East Timor)', 'Democratic Republic of Timor-Leste', 'TLS', '626', 'yes', '670', '.tl'),
            array('TG', 'Togo', 'Togolese Republic', 'TGO', '768', 'yes', '228', '.tg'),
            array('TK', 'Tokelau', 'Tokelau', 'TKL', '772', 'no', '690', '.tk'),
            array('TO', 'Tonga', 'Kingdom of Tonga', 'TON', '776', 'yes', '676', '.to'),
            array('TT', 'Trinidad and Tobago', 'Republic of Trinidad and Tobago', 'TTO', '780', 'yes', '1+868', '.tt'),
            array('TN', 'Tunisia', 'Republic of Tunisia', 'TUN', '788', 'yes', '216', '.tn'),
            array('TR', 'Turkey', 'Republic of Turkey', 'TUR', '792', 'yes', '90', '.tr'),
            array('TM', 'Turkmenistan', 'Turkmenistan', 'TKM', '795', 'yes', '993', '.tm'),
            array('TC', 'Turks and Caicos Islands', 'Turks and Caicos Islands', 'TCA', '796', 'no', '1+649', '.tc'),
            array('TV', 'Tuvalu', 'Tuvalu', 'TUV', '798', 'yes', '688', '.tv'),
            array('UG', 'Uganda', 'Republic of Uganda', 'UGA', '800', 'yes', '256', '.ug'),
            array('UA', 'Ukraine', 'Ukraine', 'UKR', '804', 'yes', '380', '.ua'),
            array('AE', 'United Arab Emirates', 'United Arab Emirates', 'ARE', '784', 'yes', '971', '.ae'),
            array('GB', 'United Kingdom', 'United Kingdom of Great Britain and Nothern Ireland', 'GBR', '826', 'yes', '44', '.uk'),
            array('US', 'United States', 'United States of America', 'USA', '840', 'yes', '1', '.us'),
            array('UM', 'United States Minor Outlying Islands', 'United States Minor Outlying Islands', 'UMI', '581', 'no', 'NONE', 'NONE'),
            array('UY', 'Uruguay', 'Eastern Republic of Uruguay', 'URY', '858', 'yes', '598', '.uy'),
            array('UZ', 'Uzbekistan', 'Republic of Uzbekistan', 'UZB', '860', 'yes', '998', '.uz'),
            array('VU', 'Vanuatu', 'Republic of Vanuatu', 'VUT', '548', 'yes', '678', '.vu'),
            array('VA', 'Vatican City', 'State of the Vatican City', 'VAT', '336', 'no', '39', '.va'),
            array('VE', 'Venezuela', 'Bolivarian Republic of Venezuela', 'VEN', '862', 'yes', '58', '.ve'),
            array('VN', 'Vietnam', 'Socialist Republic of Vietnam', 'VNM', '704', 'yes', '84', '.vn'),
            array('VG', 'Virgin Islands, British', 'British Virgin Islands', 'VGB', '092', 'no', '1+284', '.vg'),
            array('VI', 'Virgin Islands, US', 'Virgin Islands of the United States', 'VIR', '850', 'no', '1+340', '.vi'),
            array('WF', 'Wallis and Futuna', 'Wallis and Futuna', 'WLF', '876', 'no', '681', '.wf'),
            array('EH', 'Western Sahara', 'Western Sahara', 'ESH', '732', 'no', '212', '.eh'),
            array('YE', 'Yemen', 'Republic of Yemen', 'YEM', '887', 'yes', '967', '.ye'),
            array('ZM', 'Zambia', 'Republic of Zambia', 'ZMB', '894', 'yes', '260', '.zm'),
            array('ZW', 'Zimbabwe', 'Republic of Zimbabwe', 'ZWE', '716', 'yes', '263', '.zw')
        );

        foreach($countries as $country)
        {
            $data = [];
            foreach($country as $key => $value)
            {
                $data[$attributes[$key]] = $value;
            }

            Country::create($data);
        }
    }

}
