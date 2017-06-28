<?php 
	namespace Controllers;

	use Models\Country as countryDb;
	use Models\Currency as currencyDb;
	use Models\Language as languageDb;
	//use Models\Country as countryDb;

	class CountryController{
		//get all countries
		function getAllCountries(){
			$countries=array();
			$country = countryDb::
				//where('state', 'E')
				//->orderBy('name', 'desc')
				//->take(10)
				get();
			if(count($country)>0){
				foreach ($country as $c) {
					$temp=[];
					foreach ($c['attributes'] as $key => $value) {
						$temp[$key]=$value;
					}
					array_push($countries, $temp);
				}
			}
			$ret = (count($countries)>0 )? $countries: false;
			return $ret;
		}

	//get all data related with a country, multi joins
		function fullDataCountry(){
			$countries = countryDb::join('pg_admin_language', 'pg_admin_country.idLanguage', '=', 'pg_admin_language.id')
				->join('pg_admin_time_zone','pg_admin_country.idTimeZone', '=', 'pg_admin_time_zone.id')
				->join('pg_admin_currency','pg_admin_country.idCurrency', '=', 'pg_admin_currency.id')
				->join('pg_admin_site','pg_admin_country.id', '=', 'pg_admin_site.idCountry')
				->join('pg_admin_brand','pg_admin_site.idBrand', '=', 'pg_admin_brand.id')
				->select('pg_admin_country.*','pg_admin_country.id as countryId','pg_admin_country.name as countryName','pg_admin_language.*','pg_admin_language.name as languageName','pg_admin_time_zone.*','pg_admin_time_zone.id as timeZoneId','pg_admin_currency.*','pg_admin_currency.id as currencyId','pg_admin_site.*','pg_admin_site.status as siteStatus','pg_admin_site.name as SiteName','pg_admin_brand.id as BrandId','pg_admin_brand.name as BrandName','pg_admin_brand.id as BrandId')
				//->where('idRoute','=',$idRoute)
				->get();
				return $countries;
		}
		function fullDataCountryByCountryId($id){
			$countries = countryDb::join('pg_admin_language', 'pg_admin_country.idLanguage', '=', 'pg_admin_language.id')
				->join('pg_admin_time_zone','pg_admin_country.idTimeZone', '=', 'pg_admin_time_zone.id')
				->join('pg_admin_currency','pg_admin_country.idCurrency', '=', 'pg_admin_currency.id')
				->join('pg_admin_site','pg_admin_country.id', '=', 'pg_admin_site.idCountry')
				->join('pg_admin_brand','pg_admin_site.idBrand', '=', 'pg_admin_brand.id')
				->select('pg_admin_country.*','pg_admin_country.id as countryId','pg_admin_country.name as countryName','pg_admin_language.*','pg_admin_language.name as languageName','pg_admin_time_zone.*','pg_admin_time_zone.id as timeZoneId','pg_admin_currency.*','pg_admin_currency.id as currencyId','pg_admin_site.*','pg_admin_site.status as siteStatus','pg_admin_site.name as SiteName','pg_admin_brand.id as BrandId','pg_admin_brand.name as BrandName','pg_admin_brand.id as BrandId')
				->where('pg_admin_country.id','=',$id)
				->get();
				return $countries;
		}
	}
?>