<?php
/*
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: Slovak
Translated by: Michal Klačko / December 2020
Developed By: Lightmaster/Brian Underdown/Erik M Madsen
October/November 2016
Revised: 2019
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day                             = date("l");
$day2                            = date("l", time() + 86400);
$daynum                          = date("j");
$monthtrans                      = date("F");
$year                            = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------

$lang                            = array();
// Menu
$lang['Settings']                = 'Nastavenia';
$lang['Layout']                  = 'Prepnúť rozloženie';
$lang['Lighttheme']              = 'Svetlá téma';
$lang['Darktheme']               = 'Tmavá téma';
$lang['Nonmetric']               = 'US (F) ';
$lang['Metric']                  = 'Metrické (C)';
$lang['UKmetric']                = 'UK (MPH - Metrické) ';
$lang['Scandinavia']             = 'Škandinávske (M/S)';
$lang['Worldwideearthquakes']    = 'Svetové zemetrasenia';
$lang['Toggle']                  = 'Na celú obrazovku ';
$lang['Contactinfo']             = 'O stanici a kontakt';
$lang['Templateinfo']            = 'Info o vzhľade';
$lang['language']                = 'Vybrať jazyk';
$lang['Weatherstationinfo']      = 'Info o meteostanici';
$lang['Webdesigninfo']           = 'Info o Webdesigne';
$lang['Contact']                 = 'Kontakt';
//days
$lang['Monday']                  = 'Pondelok';
$lang['Tuesday']                 = 'Utorok';
$lang['Wednesday']               = 'Streda';
$lang['Thursday']                = 'Štvrtok';
$lang['Friday']                  = 'Piatok';
$lang['Saturday']                = 'Sobota';
$lang['Sunday']                  = 'Nedeľa';
//months
$lang['January']                 = 'Január';
$lang['Febuary']                 = 'Febuár';
$lang['March']                   = 'Marec';
$lang['April']                   = 'Apríl';
$lang['May']                     = 'Máj';
$lang['June']                    = 'Jún';
$lang['July']                    = 'Júl';
$lang['August']                  = 'August';
$lang['September']               = 'September';
$lang['October']                 = 'Október';
$lang['November']                = 'November';
$lang['December']                = 'December';
//temperature
$lang['Temperature']             = 'Teplota';
$lang['Feelslike']               = 'Pocitová';
$lang['Humidity']                = 'Vlhkosť';
$lang['Dewpoint']                = 'Rosný bod';
$lang['Trend']                   = 'trend ';
$lang['Heatindex']               = 'Teplotný index';
$lang['Apparent']                = 'Zdanlivá';
$lang['Windchill']               = 'Veterný chlad';
$lang['IndoorTemp']              = 'Vnútorná teplota';
$lang['Tempfactors']             = 'Teplot. faktory';
$lang['Nocautions']              = 'Bez výstrah';
$lang['Wetbulb']                 = 'Teplota mokrého teplomeru';
$lang['dry']                     = 'a sucho';
$lang['verydry']                 = 'a veľmi sucho';
//new feature temperature feels
$lang['FreezingCold']            = 'Mrazivo';
$lang['FeelingVeryCold']         = 'Veľmi chladno';
$lang['FeelingCold']             = 'Chladno';
$lang['FeelingCool']             = 'Studeno';
$lang['FeelingComfortable']      = 'Komfortne ';
$lang['FeelingWarm']             = 'Teplo';
$lang['FeelingHot']              = 'Horúco';
$lang['FeelingUncomfortable']    = 'Nekomfortne';
$lang['FeelingVeryHot']          = 'Veľmi horúco';
$lang['FeelingExtremelyHot']     = 'Extrémne horúco';
//wind
$lang['Windspeed']               = 'Vietor';
$lang['Gust']                    = 'Náraz';
$lang['Direction']               = 'Smer';
$lang['Gusting']                 = 'Nárazy zo';
$lang['Blowing']                 = 'Fúka zo';
$lang['Wind']                    = 'Vietor';
$lang['Wind Run']                = 'Dĺžka vetra';
// Wind phrases for Beaufort scale for windspeed area
$lang['Calm']                    = 'Bezvetrie';
$lang['Lightair']                = 'Vánok';
$lang['Lightbreeze']             = 'Slabý vietor';
$lang['Gentelbreeze']            = 'Jemný vietor';
$lang['Moderatebreeze']          = 'Mierny vietor';
$lang['Freshbreeze']             = 'Dosť čerstvý vietor';
$lang['Strongbreeze']            = 'Čerstvý vietor';
$lang['Neargale']                = 'Silný vietor';
$lang['Galeforce']               = 'Búrlivý vietor';
$lang['Stronggale']              = 'Víchrica';
$lang['Storm']                   = 'Silná víchrica';
$lang['Violentstorm']            = 'Mohutná víchrica';
$lang['Hurricane']               = 'Orkán';
// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions']          = 'Bezvetrie';
$lang['LightBreezeattimes']      = 'Občasný vánok ';
$lang['MildBreezeattimes']       = 'Občasný slabý vietor ';
$lang['ModerateBreezeattimes']   = 'Občasný ierny vietor';
$lang['FreshBreezeattimes']      = 'Občasný dosť čerstvý vietor';
$lang['StrongBreezeattimes']     = 'Občasný čerstvý vietor';
$lang['NearGaleattimes']         = 'Občasný silný vietor';
$lang['GaleForceattimes']        = 'Občasný búrlivý vietor';
$lang['StrongGaleattimes']       = 'Miestami víchrica';
$lang['StormConditions']         = 'Silná víchrica';
$lang['ViolentStormConditions']  = 'Mohutná víchrica';
$lang['HurricaneConditions']     = 'Orkán';
$lang['Avg']                     = '<span2> Priemer: </span2>';
//wind direction compass
$lang['Northdir']                = 'Pravý <span>Sever<br></span>';
$lang['NNEdir']                  = 'Severo-Severo-<br><span>Východ</span>';
$lang['NEdir']                   = 'Severo<span>Východ<br></span>';
$lang['ENEdir']                  = 'Východo-Severo-<br><span>Východ</span>';
$lang['Eastdir']                 = "Pravý <span> Východ<br></span>";
$lang['ESEdir']                  = 'Východo-Juho-<br><span>Východ</span>';
$lang['SEdir']                   = 'Juho<span>Východ</span>';
$lang['SSEdir']                  = 'Juho-Juho-<br><span>Východ</span>';
$lang['Southdir']                = 'Pravý <span>Juh</span>';
$lang['SSWdir']                  = 'Juho-Juho-<br><span>Západ</span>';
$lang['SWdir']                   = 'Juho<span>Západ</span>';
$lang['WSWdir']                  = 'Západo-Juho<br><span>Západ</span>';
$lang['Westdir']                 = 'Pravý <span>Západ</span>';
$lang['WNWdir']                  = 'West North<br><span>West</span>';
$lang['NWdir']                   = 'Severo<span>Západ</span>';
$lang['NWNdir']                  = 'Severo-Severo<br><span>Západ</span>';
//wind direction avg
$lang['North']                   = 'Sever';
$lang['NNE']                     = 'SSV';
$lang['NE']                      = 'SV';
$lang['ENE']                     = 'VSV';
$lang['East']                    = 'Východ';
$lang['ESE']                     = 'VJV';
$lang['SE']                      = 'JV';
$lang['SSE']                     = 'JJV';
$lang['South']                   = 'Juh';
$lang['SSW']                     = 'JJZ';
$lang['SW']                      = 'JZ';
$lang['WSW']                     = 'ZJZ';
$lang['West']                    = 'Západ';
$lang['WNW']                     = 'ZSZ';
$lang['NW']                      = 'SZ';
$lang['NWN']                     = 'SZS';
//rain
$lang['raintoday']               = 'Dnešné zrážky';
$lang['Rate']                    = 'Intenzita';
$lang['Rainfall']                = 'Zrážky';
$lang['Precip']                  = 'Zr.'; // must be short name do not use full precipatation !!!! ///
$lang['Rain']                    = 'Dážď';
$lang['Heavyrain']               = 'Silný dážď';
$lang['Flooding']                = 'Pravdepodobnosť záplav';
$lang['Rainbow']                 = 'Dúha';
$lang['Windy']                   = 'Veterno';
//sun -moon-daylight-darkness
$lang['Sun']                     = 'Slnko';
$lang['Moon']                    = 'Mesiac';
$lang['Sunrise']                 = 'Východ Slnka';
$lang['Sunset']                  = 'Západ Slnka';
$lang['Moonrise']                = 'Východ Mesiaca';
$lang['Moonset']                 = 'Západ Mesiaca';
$lang['Night']                   = 'Noc';
$lang['Day']                     = 'Deň';
$lang['Nextnewmoon']             = 'Nasledujúci nov';
$lang['Nextfullmoon']            = 'Nasledújúci spln';
$lang['Luminance']               = 'Luminance';
$lang['Moonphase']               = 'Fáza Mesiaca';
$lang['Estimated']               = 'Odhad';
$lang['Daylight']                = 'Denné svetlo';
$lang['Darkness']                = 'Tma';
$lang['Daysold']                 = 'Dní starý';
$lang['Belowhorizon']            = 'pod<br>horizontom';
$lang['Mintill']                 = ' minút do';
$lang['Till']                    = 'Do ';
$lang['Minago']                  = ' minút dozadu';
$lang['Hrs']                     = ' hod';
$lang['Min']                     = ' min';
$lang['TotalDarkness']           = 'Úplná tma';
$lang['TotalDaylight']           = 'Úplné denné svetlo';
$lang['Below']                   = 'je pod horizontom';
$lang['Newmoon']                 = 'Nov';
$lang['Waxingcrescent']          = 'Dorastajúci polmesiac';
$lang['Firstquarter']            = 'Prvá štvrť';
$lang['Waxinggibbous']           = 'Dorastajúci mesiac';
$lang['Fullmoon']                = 'Spln';
$lang['Waninggibbous']           = 'Ubúdajúci mesiac';
$lang['Lastquarter']             = 'Posledná štvrť';
$lang['Waningcrescent']          = 'Ubúdajúci polmesiac';
//trends
$lang['Falling']                 = 'Klesajúci';
$lang['Rising']                  = 'Stúpajúci';
$lang['Steady']                  = 'Ustálený';
$lang['Rapidly']                 = 'Rýchlo';
$lang['Temp']                    = 'Teplota';
//Solar-UV
//uv
$lang['Nocaution']               = 'Žiadna <color>výstraha</color> nie je potrebná';
$lang['Wearsunglasses']          = 'V jasných dňoch noste <color>slnečné okuliare</color>';
$lang['Stayinshade']             = 'Počas obedňajších hodín, keď je  <color>slnko</color> najsilnejšie, zostaňte v tieni';
$lang['Reducetime']              = 'Skráťte pobyt na <color>slnku</color> medzi 10-16 hodinou ';
$lang['Minimize']                = 'Minimalizujte vystavovanie sa <color>slnku</color> medzi 10-16 hodinou';
$lang['Trytoavoid']              = 'Skúste sa vyhnúť <color>slnku</color> medzi 10-16 hodinou ';
//solar
$lang['Poor']                    = 'Slabé<color> <br>žiarenie</color>';
$lang['Low']                     = 'Nízke <br><color>žiarenie</color>';
$lang['Moderate']                = 'Stredné <br><color>žiarenie</color>';
$lang['Good']                    = 'Dobré <br><color>žiarenie</color>';
$lang['Solarradiation']          = 'Slnečné žiarenie';
//current sky
$lang['Currentsky']              = 'Aktuálne podmienky';
$lang['Currently']               = 'Aktuálne';
$lang['Cloudcover']              = 'Pokrytie mrakmi';
//Notifications
$lang['Nocurrentalert']          = 'Žiadne aktuálne <span>výstrahy</span>';
$lang['Windalert']               = 'Nárazy vetra na';
$lang['Tempalert']               = 'Vysoká teplota';
$lang['Heatindexalert']          = 'Výstraha pred teplotným indexom';
$lang['Windchillalert']          = 'Výstraha pred ochladzovaním vetrom';
$lang['Dewpointalert']           = 'Nekomfortná vlhkosť';
$lang['Dewpointcolderalert']     = 'Výstraha pred rosným bodom';
$lang['Feelslikecolderalert']    = 'Pocitovo chladnejšie';
$lang['Feelslikewarmeralert']    = 'Pocitovo teplejšie';
$lang['Rainratealert']           = 'za hod<span> Prudký dážď ';
//Earthquake Notifications
$lang['Regional']                = 'Regionálne zemetrasenie';
$lang['Significant']             = 'Významné zemetrasenie';
$lang['Nosignificant']           = 'Bezvýznamné zemetrasenie';
//Main page
$lang['Barometer']               = 'Tlak';
$lang['UVSOLAR']                 = 'UV Index';
$lang['Earthquake']              = 'Zemetrasenie';
$lang['Daynight']                = 'Denné svetlo a noc Info';
$lang['SunPosition']             = 'Pozícia slnka';
$lang['Location']                = 'Umiestnenie ';
$lang['Hardware']                = 'Hardware';
$lang['Rainfalltoday']           = 'Dnešné zrážky';
$lang['Windspeed']               = 'Vietor';
$lang['Winddirection']           = 'Smer vetra';
$lang['Measured']                = 'Dnes namerané';
$lang['Forecast']                = 'Predpoveď';
$lang['Forecastahead']           = 'Predpoveď dopredu';
$lang['Forecastsummary']         = 'Súmár predpovede';
$lang['WindGust']                = 'Rýchlosť vetra | Nárazov';
$lang['Hourlyforecast']          = 'Hodinová predpoveď ';
$lang['Significantearthquake']   = 'Významné zemetrasenie';
$lang['Regionalearthquake']      = 'Regionálne zemetrasenie';
$lang['Average']                 = 'Priemer';
$lang['Notifications']           = '<span>Výstraha</span> počasia';
$lang['Indoor']                  = 'Vnútri';
$lang['Today']                   = 'Dnes';
$lang['Tonight']                 = 'V noci';
$lang['Tomorrow']                = 'Zajtra';
$lang['Tomorrownight']           = 'Zajtra v noci';
$lang['Updated']                 = 'Aktualizované';
$lang['Meteor']                  = 'Meteoritická sprcha - info';
$lang['Firerisk']                = 'Riziko požiaru';
$lang['Localtime']               = 'Miestny <span2>čas</span2>';
$lang['Nometeor']                = 'Žiadne meteoritické sprchy';
$lang['LiveWebCam']              = 'Živá webkamera';
$lang['Online']                  = 'Online';
$lang['Offline']                 = 'Offline';
$lang['Weatherstation']          = 'Meteostanica';
$lang['Cloudbase']               = 'Základňa mrakov';
$lang['uvalert']                 = 'Výstraha - vysoký UV Index';
$lang['Max']                     = 'Max';
$lang['Min']                     = 'Min';
//earthquake TOP MODULE 10 July 2017
$lang['MicroE']                  = 'Mikro zemetrasenie';
$lang['MinorE']                  = 'Malé zemetrasenie';
$lang['LightE']                  = 'Ľahké zemetrasenie';
$lang['ModerateE']               = 'Mierne zemetrasenie';
$lang['StrongE']                 = 'Silné zemetrasenie';
$lang['MajorE']                  = 'Veľké zemetrasenie';
$lang['GreatE']                  = 'Obrovské zemetrasenie';
$lang['RegionalE']               = 'Regionálne';
$lang['Conditions']              = 'Podmienky';
$lang['Cloudbase Height']        = 'Šírka základne mrakov';
$lang['Station']                 = 'Stanica';
$lang['Detailed Forecast']       = 'Podrobná predpoveď';
$lang['Summary Outlook']         = 'Sumár výhľadu';
//Air Quality
$lang['Hazordous']               = 'Hazardné podmienky';
$lang['VeryUnhealthy']           = 'Veľmi nezdravé';
$lang['Unhealthy']               = 'Nezdravá kvalita vzduchu';
$lang['UnhealthyFS']             = 'Nezdravé pre niektorých ľudí';
$lang['Moderate']                = 'Priemerná kvalita vzduchu';
$lang['Good']                    = 'Dobrá kvalita vzduchu';
#notification additions
$lang['notifyTitle']             = 'Notifikácie';
$lang['notifyAlert']             = "Výstraha";
$lang['notifyLowBatteryAlert']   = "Výstraha - slabá batéria";
$lang['notifyConsoleLowBattery'] = "Slabá batéria displeja";
$lang['notifyStationLowBattery'] = "Slabá batéria stanice";
$lang['notifyUVIndex']           = "Výstraha - UV Index";
$lang['notifyUVExposure']        = "Obmedzte pobyt na slnku";
$lang['notifyHeatExaustion']     = "Vyčerpanie z tepla";
$lang['notifyExtremeWind']       = "Výstraha - extrémny vietor";
$lang['notifyGustUpTo']          = "Nárazy až do";
$lang['notifySeekShelter']       = "<notifyred><b>Okamžite</b></notifyred> vyhľadajte úkryt";
$lang['notifyHighWindWarning']   = "Výstraha - silný vietor";
$lang['notifySustainedAvg']      = "Trvalý priemer";
$lang['notifyWindAdvisory']      = "Veterné odporúčanie";
$lang['notifyFreezing']          = "Pod bodom mrazu";

?>
