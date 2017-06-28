<?php 
	namespace Controllers;

	use Models\Country as countryDB;
	use Models\Currency as currencyDB;
	use Models\Language as languageDB;
	use Models\City as cityDB;

	class CountryController {

		function getAllCountry(){
			$countries = countryDb::join('pg_admin_language', 'pg_admin_country.idLanguage', '=', 'pg_admin_language.id')
				->join('pg_admin_time_zone','pg_admin_country.idTimeZone', '=', 'pg_admin_time_zone.id')
				->join('pg_admin_currency','pg_admin_country.idCurrency', '=', 'pg_admin_currency.id')
				->select('pg_admin_country.*','pg_admin_country.id as countryId','pg_admin_country.name as countryName','pg_admin_language.*','pg_admin_language.name as languageName','pg_admin_time_zone.*','pg_admin_time_zone.gmt as gmtZone','pg_admin_currency.*','pg_admin_currency.id as currencyId')
				->get();
				return $countries;
			if(count($countries) != 0){
				return $countries;
			} else {
				return null;
			}
		}
		/*function fullDataCountryByCountryId($id){
			$countries = countryDb::join('pg_admin_language', 'pg_admin_country.idLanguage', '=', 'pg_admin_language.id')
				->join('pg_admin_time_zone','pg_admin_country.idTimeZone', '=', 'pg_admin_time_zone.id')
				->join('pg_admin_currency','pg_admin_country.idCurrency', '=', 'pg_admin_currency.id')
				->join('pg_admin_site','pg_admin_country.id', '=', 'pg_admin_site.idCountry')
				->join('pg_admin_brand','pg_admin_site.idBrand', '=', 'pg_admin_brand.id')
				->select('pg_admin_country.*','pg_admin_country.id as countryId','pg_admin_country.name as countryName','pg_admin_language.*','pg_admin_language.name as languageName','pg_admin_time_zone.*','pg_admin_time_zone.id as timeZoneId','pg_admin_currency.*','pg_admin_currency.id as currencyId','pg_admin_site.*','pg_admin_site.status as siteStatus','pg_admin_site.name as SiteName','pg_admin_brand.id as BrandId','pg_admin_brand.name as BrandName','pg_admin_brand.id as BrandId')
				->where('pg_admin_country.id','=',$id)
				->get();
				return $countries;
		}*/
	}
?>