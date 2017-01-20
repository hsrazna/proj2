<?php
if( !function_exists('houzez_get_localization')) {
	function houzez_get_localization() {

if ( qtrans_getLanguage() == 'en' ) {

		$localization = array(

			/*------------------------------------------------------
			* Theme
			*------------------------------------------------------*/
			'favorite' 			=> esc_html__( 'Favorite', 'houzez' ),
			'photos' 			=> esc_html__( 'Photos', 'houzez' ),
			'disable' 			=> esc_html__( 'Disable', 'houzez' ),
			'enable' 			=> esc_html__( 'Enable', 'houzez' ),
			'any' 				=> esc_html__( 'Any', 'houzez' ),
			'none'				=> esc_html__( 'None', 'houzez' ),
			'by_text' 			=> esc_html__( 'by', 'houzez' ),
			'at_text' 			=> esc_html__( 'at', 'houzez' ),
			'goto_dash' 		=> esc_html__( 'Go to Dashboard', 'houzez' ),
			'read_more' 		=> esc_html__( 'Read More', 'houzez' ),
			'continue_reading' 	=> esc_html__( 'Continue reading', 'houzez' ),
			'follow_us' 		=> esc_html__( 'Follow us', 'houzez' ),
			'property' 			=> esc_html__( 'Property', 'houzez' ),
			'properties' 		=> esc_html__( 'Properties', 'houzez' ),
			'keyword_text' 		=> esc_html__( 'Enter keyword...', 'houzez' ),
			'city_state_area' 	=> esc_html__( 'Search City, State or Area', 'houzez' ),
			'search_address' 	=> esc_html__( 'Enter an address, town, street, zip or property ID', 'houzez' ),
			'enter_location' 	=> esc_html__( 'Enter a Location', 'houzez' ),
			'all_countries' 		=> esc_html__( 'All Countries', 'houzez' ),
			'all_states' 		=> esc_html__( 'All States', 'houzez' ),
			'all_cities' 		=> esc_html__( 'All Cities', 'houzez' ),
			'all_areas' 		=> esc_html__( 'All Areas', 'houzez' ),
			'area_size' 		=> esc_html__( 'Area Size', 'houzez' ),
			'all_status' 		=> esc_html__( 'All Status', 'houzez' ),
			'all_types' 		=> esc_html__( 'All Types', 'houzez' ),
			'beds' 				=> esc_html__( 'Beds', 'houzez' ),
			'baths' 			=> esc_html__( 'Baths', 'houzez' ),
			'bedrooms' 			=> esc_html__( 'Bedrooms', 'houzez' ),
			'bathrooms' 		=> esc_html__( 'Bathrooms', 'houzez' ),
			'min_bedrooms' 		=> esc_html__( 'Min.Bedrooms', 'houzez' ),
			'min_area' 			=> esc_html__( 'Min Area', 'houzez' ),
			'max_area' 			=> esc_html__( 'Max Area', 'houzez' ),
			'min_price' 		=> esc_html__( 'Min Price', 'houzez' ),
			'max_price' 		=> esc_html__( 'Max Price', 'houzez' ),
			'available_from' 	=> esc_html__( 'Available from', 'houzez' ),
			'price_range' 		=> esc_html__( 'Price Range:', 'houzez' ),
			'from' 				=> esc_html__( 'From', 'houzez' ),
			'to'                => esc_html__( 'to', 'houzez' ),
			'other_feature'     => esc_html__( 'Other Features', 'houzez' ),
			'more_options' 		=> esc_html__( 'More Options', 'houzez' ),
			'go' 				=> esc_html__( 'Go', 'houzez' ),
			'search' 			=> esc_html__( 'Search', 'houzez' ),
			'advanced' 			=> esc_html__( 'Advanced', 'houzez' ),
			'advanced_search' 	=> esc_html__( 'Advanced Search', 'houzez' ),
			'404_page' 			=> esc_html__( 'Back to Homepage', 'houzez' ),
			'at' 				=> esc_html__( 'at', 'houzez' ),
			'office' 			=> esc_html__( 'OFFICE:', 'houzez' ),
			'mobile' 			=> esc_html__( 'MOBILE:', 'houzez' ),
			'fax' 				=> esc_html__( 'FAX:', 'houzez' ),
			'licenses' 			=> esc_html__( 'Licenses:', 'houzez' ),
			'agency_agents' 	=> esc_html__( 'Agents:', 'houzez' ),
			'agency_properties' => esc_html__( 'Properties listed:', 'houzez' ),
			'email' 			=> esc_html__( 'Email:', 'houzez' ),
			'website' 			=> esc_html__( 'Website:', 'houzez' ),
			'submit' 			=> esc_html__( 'Submit', 'houzez' ),
			'join_discussion' 	=> esc_html__( 'Join The Discussion', 'houzez' ),
			'your_name'	 		=> esc_html__( 'Your Name', 'houzez' ),
			'your_email'	 	=> esc_html__( 'Your Email', 'houzez' ),
			'blog_search'	 	=> esc_html__( 'Search', 'houzez' ),
			'featured'	 		=> esc_html__( 'Featured', 'houzez' ),
			'view_my_prop'	 	=> esc_html__( 'View My Properties', 'houzez' ),
			'office_colon'	 	=> esc_html__( 'office:', 'houzez' ),
			'mobile_colon'	 	=> esc_html__( 'mobile:', 'houzez' ),
			'fax_colon'	 	    => esc_html__( 'fax:', 'houzez' ),
			'email_colon'	 	=> esc_html__( 'Email:', 'houzez' ),
			'follow_us'	 		=> esc_html__( 'Follow us', 'houzez' ),
			'type'		 		=> esc_html__( 'Type', 'houzez' ),
			'address'		 	=> esc_html__( 'Address', 'houzez' ),
			'city'		 		=> esc_html__( 'City', 'houzez' ),
			'state_county'      => esc_html__( 'State/County', 'houzez' ),
			'zip_post'		    => esc_html__( 'Zip/Post Code', 'houzez' ),
			'country'		    => esc_html__( 'Country', 'houzez' ),
			'prop_size'		    => esc_html__( 'Property Size', 'houzez' ),
			'prop_id'		    => esc_html__( 'Property ID', 'houzez' ),
			'garage'		    => esc_html__( 'Garage', 'houzez' ),
			'garage_size'		=> esc_html__( 'Garage Size', 'houzez' ),
			'year_built'		=> esc_html__( 'Year Built', 'houzez' ),
			'time_period'		=> esc_html__( 'Time Period', 'houzez' ),
			'unlimited_listings'=> esc_html__( 'Unlimited Listings', 'houzez' ),
			'featured_listings' => esc_html__( 'Featured Listings', 'houzez' ),
			'get_started' 		=> esc_html__( 'Get Started', 'houzez' ),
			'save_search'	 	=> esc_html__( 'Save this Search?', 'houzez' ),
			'sort_by'		 	=> esc_html__( 'Sort by:', 'houzez' ),
			'default_order'	    => esc_html__( 'Default Order', 'houzez' ),
			'price_low_high'	=> esc_html__( 'Price (Low to High)', 'houzez' ),
			'price_high_low'	=> esc_html__( 'Price (High to Low)', 'houzez' ),
			'date_old_new'		=> esc_html__( 'Date Old to New', 'houzez' ),
			'date_new_old'		=> esc_html__( 'Date New to Old', 'houzez' ),
			'bank_transfer'		=> esc_html__( 'Direct Bank Transfer', 'houzez' ),
			'order_number'		=> esc_html__( 'Order Number', 'houzez' ),
			'payment_method' 	=> esc_html__( 'Payment Method', 'houzez' ),
			'date'				=> esc_html__( 'Date', 'houzez' ),
			'total'				=> esc_html__( 'Total', 'houzez' ),
			'submit'			=> esc_html__( 'Submit', 'houzez' ),
			'search_listing'	=> esc_html__( 'Search Listing', 'houzez' ),
			'published'			=> esc_html__( 'Published', 'houzez' ),
			'pending'			=> esc_html__( 'Pending', 'houzez' ),
			'expired'			=> esc_html__( 'Expired', 'houzez' ),


			'floor_plan_for'	=> esc_html__( 'Floor Plans for', 'houzez' ),
			'floor_plans'		=> esc_html__( 'Floor Plans', 'houzez' ),
			'plan_title'		=> esc_html__( 'Plan Title', 'houzez' ),
			'plan_bedrooms'		=> esc_html__( 'Plan Bedrooms', 'houzez' ),
			'plan_bathrooms'	=> esc_html__( 'Plan Bathrooms', 'houzez' ),
			'plan_price'		=> esc_html__( 'Plan Price', 'houzez' ),
			'plan_postfix'		=> esc_html__( 'Plan Postfix', 'houzez' ),
			'plan_size'			=> esc_html__( 'Plan Size', 'houzez' ),
			'plan_image'		=> esc_html__( 'Plan Image', 'houzez' ),
			'plan_des'			=> esc_html__( 'Plan Description', 'houzez' ),
			'upload'			=> esc_html__( 'Upload', 'houzez' ),
			'add_more'			=> esc_html__( 'Add More', 'houzez' ),

			'search_invoices'	=> esc_html__( 'Search Invoices', 'houzez' ),
			'total_invoices'	=> esc_html__( 'Total Invoices:', 'houzez' ),
			'start_date'		=> esc_html__( 'Start date', 'houzez' ),
			'end_date'			=> esc_html__( 'End date', 'houzez' ),
			'invoice_type'		=> esc_html__( 'Type', 'houzez' ),
			'invoice_listing'	=> esc_html__( 'Listing', 'houzez' ),
			'invoice_package'	=> esc_html__( 'Package', 'houzez' ),
			'invoice_feat_list'		=> esc_html__( 'Listing with Featured', 'houzez' ),
			'invoice_upgrade_list'	=> esc_html__( 'Upgrade to Featured', 'houzez' ),
			'invoice_status'	=> esc_html__( 'Status', 'houzez' ),
			'paid'				=> esc_html__( 'Paid', 'houzez' ),
			'not_paid'			=> esc_html__( 'Not Paid', 'houzez' ),
			'order'				=> esc_html__( 'Order', 'houzez' ),
			'view_details'		=> esc_html__( 'View Details', 'houzez' ),
			'payment_details'	=> esc_html__( 'Payment details', 'houzez' ),
			'property_title'	=> esc_html__( 'Property Title', 'houzez' ),
			'billing_type'		=> esc_html__( 'Billing Type', 'houzez' ),
			'invoice_price'		=> esc_html__( 'Price:', 'houzez' ),
			'customer_details'	=> esc_html__( 'Customer details:', 'houzez' ),
			'customer_name'		=> esc_html__( 'Name:', 'houzez' ),
			'customer_email'	=> esc_html__( 'Email:', 'houzez' ),


			'mu_for'	=> esc_html__( 'Multi Units / Sub Properties for', 'houzez' ),
			'multi_unit'	=> esc_html__( 'Multi Units / Sub Properties', 'houzez' ),
			'mu_title'	=> esc_html__( 'Title', 'houzez' ),
			'mu_beds'	=> esc_html__( 'Bedrooms', 'houzez' ),
			'mu_baths'	=> esc_html__( 'Bathrooms', 'houzez' ),
			'mu_prop_size'	=> esc_html__( 'Property Size', 'houzez' ),
			'mu_size_postfix'	=> esc_html__( 'Size Postfix', 'houzez' ),
			'mu_price'	=> esc_html__( 'Price', 'houzez' ),
			'mu_price_postfix'	=> esc_html__( 'Price Postfix', 'houzez' ),
			'mu_prop_type'	=> esc_html__( 'Property Type', 'houzez' ),
			'mu_date'	=> esc_html__( 'Availability Date', 'houzez' ),

			//Add property
			'prop_des_price'	=> esc_html__( 'Property description and price', 'houzez' ),
			'prop_title'	=> esc_html__( 'Property Title', 'houzez' ),
			'prop_title_placeholder'	=> esc_html__( 'Enter your property title', 'houzez' ),
			'prop_des'	=> esc_html__( 'Description', 'houzez' ),
			'prop_type'	=> esc_html__( 'Type', 'houzez' ),
			'prop_status'	=> esc_html__( 'Status', 'houzez' ),
			'prop_label'	=> esc_html__( 'Label', 'houzez' ),
			'prop_sale_rent_price'	=> esc_html__( 'Sale or Rent Price', 'houzez' ),
			'prop_sale_rent_price_placeholder'	=> esc_html__( 'Enter Sale or Rent Price', 'houzez' ),
			'prop_second_price'	=> esc_html__( 'Second Price (Optional)', 'houzez' ),
			'prop_second_price_placeholder'	=> esc_html__( 'Enter your property second price', 'houzez' ),
			'prop_price_label'	=> esc_html__( 'After Price Label (ex: monthly)', 'houzez' ),
			'prop_price_prefix'	=> esc_html__( 'Price Prefix (ex: Start from)', 'houzez' ),
			'prop_price_prefix_placeholder'	=> esc_html__( 'Enter before price label', 'houzez' ),
			'prop_price_label_placeholder'	=> esc_html__( 'Enter after price label', 'houzez' ),


			'agent_information'	=> esc_html__( 'Agent Information', 'houzez' ),
			'what_display_agentbox'	=> esc_html__( 'What to display in agent information box?', 'houzez' ),
			'author_info'	=> esc_html__( 'Author information.', 'houzez' ),
			'agent_info'	=> esc_html__( 'Agent Information. ( Select the agent below )', 'houzez' ),
			'hide_info_box'	=> esc_html__( 'Hide information box', 'houzez' ),



			'saved_search_not_found'=> esc_html__( 'You don\'t have any saved search', 'houzez' ),
			'properties_not_found'=> esc_html__( 'You don\'t have any properties yet!', 'houzez' ),
			'favorite_not_found'=> esc_html__( 'You don\'t have any favorite properties yet!', 'houzez' ),
			'email_already_registerd' => esc_html__( 'This email address is already registered', 'houzez' ),
			'invalid_email' => esc_html__( 'Invalid email address.', 'houzez' ),
			'houzez_plugin_required' => esc_html__( 'Please install and activate Houzez theme functionality plugin', 'houzez' ),


			/*------------------------------------------------------
			* Shortcodes
			*------------------------------------------------------*/
			// Agents
			'view_profile' => esc_html__( 'View Profile', 'houzez' ),

			/*------------------------------------------------------
			* Common
			*------------------------------------------------------*/
			'next_text' => esc_html__('Next', 'houzez'),
			'prev_text' => esc_html__('Prev', 'houzez'),

			/*------------------------------------------------------
			* Custom Post Types
			*------------------------------------------------------*/


			/*------------------------------------------------------
			* Theme Options
			*------------------------------------------------------*/
			'general' => esc_html__( 'General', 'houzez' ),


		);
} elseif ( qtrans_getLanguage() == 'ru' ) {

		$localization = array(

			/*------------------------------------------------------
			* Theme
			*------------------------------------------------------*/
			'favorite' 			=> esc_html__( 'Избранное', 'houzez' ),
			'photos' 			=> esc_html__( 'Изображения', 'houzez' ),
			'disable' 			=> esc_html__( 'Отключить', 'houzez' ),
			'enable' 			=> esc_html__( 'Включить', 'houzez' ),
			'any' 				=> esc_html__( 'Любой', 'houzez' ),
			'none'				=> esc_html__( 'Нет', 'houzez' ),
			'by_text' 			=> esc_html__( '', 'houzez' ),
			'at_text' 			=> esc_html__( 'в', 'houzez' ),
			'goto_dash' 		=> esc_html__( 'Обратно на общую панель', 'houzez' ),
			'read_more' 		=> esc_html__( 'Узнай больше', 'houzez' ),
			'continue_reading' 	=> esc_html__( 'Продолжить чтение', 'houzez' ),
			'follow_us' 		=> esc_html__( 'Подпишитесь на нас', 'houzez' ),
			'property' 			=> esc_html__( 'Объект', 'houzez' ),
			'properties' 		=> esc_html__( 'Объекты', 'houzez' ),
			'keyword_text' 		=> esc_html__( 'Введите запрос...', 'houzez' ),
			'city_state_area' 	=> esc_html__( 'Поиск города, района или площади', 'houzez' ),
			'search_address' 	=> esc_html__( 'Введите город, улицу, почтовый код или ID объекта', 'houzez' ),
			'enter_location' 	=> esc_html__( 'Введите месторасположение', 'houzez' ),
			'all_countries' 		=> esc_html__( 'Все страны', 'houzez' ),
			'all_states' 		=> esc_html__( 'Все районы', 'houzez' ),
			'all_cities' 		=> esc_html__( 'Все города', 'houzez' ),
			'all_areas' 		=> esc_html__( 'Все площади', 'houzez' ),
			'area_size' 		=> esc_html__( 'Размер площади', 'houzez' ),
			'all_status' 		=> esc_html__( 'Все статусы', 'houzez' ),
			'all_types' 		=> esc_html__( 'Все типы', 'houzez' ),
			'beds' 				=> esc_html__( 'Кровати', 'houzez' ),
			'baths' 			=> esc_html__( 'Ванные', 'houzez' ),
			'bedrooms' 			=> esc_html__( 'Спальни', 'houzez' ),
			'bathrooms' 		=> esc_html__( 'Ванные комнаты', 'houzez' ),
			'min_bedrooms' 		=> esc_html__( 'Мин. спален', 'houzez' ),
			'min_area' 			=> esc_html__( 'Минимальноая площадь ', 'houzez' ),
			'max_area' 			=> esc_html__( 'Максимальная площадь', 'houzez' ),
			'min_price' 		=> esc_html__( 'Минимальная цена', 'houzez' ),
			'max_price' 		=> esc_html__( 'Максимальная цена', 'houzez' ),
			'available_from' 	=> esc_html__( 'Доступен с', 'houzez' ),
			'price_range' 		=> esc_html__( 'Диапазон цены:', 'houzez' ),
			'from' 				=> esc_html__( 'с', 'houzez' ),
			'to'                => esc_html__( 'до', 'houzez' ),
			'other_feature'     => esc_html__( 'Другие характеристики', 'houzez' ),
			'more_options' 		=> esc_html__( 'Больше опций', 'houzez' ),
			'go' 				=> esc_html__( 'Вперед', 'houzez' ),
			'search' 			=> esc_html__( 'Поиск', 'houzez' ),
			'advanced' 			=> esc_html__( 'Расширенный', 'houzez' ),
			'advanced_search' 	=> esc_html__( 'Расширенный поиск', 'houzez' ),
			'404_page' 			=> esc_html__( 'Обратно на главную', 'houzez' ),
			'at' 				=> esc_html__( 'в', 'houzez' ),
			'office' 			=> esc_html__( 'Офис:', 'houzez' ),
			'mobile' 			=> esc_html__( 'Мобильный телефон:', 'houzez' ),
			'fax' 				=> esc_html__( 'Факс:', 'houzez' ),
			'licenses' 			=> esc_html__( 'Лицензии:', 'houzez' ),
			'agency_agents' 	=> esc_html__( 'Агенты:', 'houzez' ),
			'agency_properties' => esc_html__( 'Список характеристик:', 'houzez' ),
			'email' 			=> esc_html__( 'Email:', 'houzez' ),
			'website' 			=> esc_html__( 'Сайт:', 'houzez' ),
			'submit' 			=> esc_html__( 'Отправить', 'houzez' ),
			'join_discussion' 	=> esc_html__( 'Присоединиться к разговору', 'houzez' ),
			'your_name'	 		=> esc_html__( 'Ваше имя', 'houzez' ),
			'your_email'	 	=> esc_html__( 'Ваш email', 'houzez' ),
			'blog_search'	 	=> esc_html__( 'Поиск', 'houzez' ),
			'featured'	 		=> esc_html__( 'Рекомендуемые', 'houzez' ),
			'view_my_prop'	 	=> esc_html__( 'Посмотреть мои объекты', 'houzez' ),
			'office_colon'	 	=> esc_html__( 'офис:', 'houzez' ),
			'mobile_colon'	 	=> esc_html__( 'Мобильный телефон:', 'houzez' ),
			'fax_colon'	 	    => esc_html__( 'Факс:', 'houzez' ),
			'email_colon'	 	=> esc_html__( 'Email:', 'houzez' ),
			'follow_us'	 		=> esc_html__( 'Подпишитесь на нас', 'houzez' ),
			'type'		 		=> esc_html__( 'Тип', 'houzez' ),
			'address'		 	=> esc_html__( 'Адрес', 'houzez' ),
			'city'		 		=> esc_html__( 'Город', 'houzez' ),
			'state_county'      => esc_html__( 'Район/Область', 'houzez' ),
			'zip_post'		    => esc_html__( 'Почтовый код', 'houzez' ),
			'country'		    => esc_html__( 'Страна', 'houzez' ),
			'prop_size'		    => esc_html__( 'Размер объекта', 'houzez' ),
			'prop_id'		    => esc_html__( ' ID объекта', 'houzez' ),
			'garage'		    => esc_html__( 'Гараж', 'houzez' ),
			'garage_size'		=> esc_html__( 'Размер гаража', 'houzez' ),
			'year_built'		=> esc_html__( 'Год постройки', 'houzez' ),
			'time_period'		=> esc_html__( 'Период времени', 'houzez' ),
			'unlimited_listings'=> esc_html__( 'Неограниченные списки', 'houzez' ),
			'featured_listings' => esc_html__( 'Избранные списки', 'houzez' ),
			'get_started' 		=> esc_html__( 'Начать', 'houzez' ),
			'save_search'	 	=> esc_html__( 'Сохранить этот поиск?', 'houzez' ),
			'sort_by'		 	=> esc_html__( 'Отсортировать по:', 'houzez' ),
			'default_order'	    => esc_html__( 'Порядок по умолчанию', 'houzez' ),
			'price_low_high'	=> esc_html__( 'Цена (От низкой к высокой)', 'houzez' ),
			'price_high_low'	=> esc_html__( 'Цена (От высокой к низкой)', 'houzez' ),
			'date_old_new'		=> esc_html__( 'Дата от старой к новой', 'houzez' ),
			'date_new_old'		=> esc_html__( 'Дата от новой к старой', 'houzez' ),
			'bank_transfer'		=> esc_html__( 'Прямой банковский перевод', 'houzez' ),
			'order_number'		=> esc_html__( 'Порядковый номер', 'houzez' ),
			'payment_method' 	=> esc_html__( 'Метод оплаты', 'houzez' ),
			'date'				=> esc_html__( 'Дата', 'houzez' ),
			'total'				=> esc_html__( 'Итого', 'houzez' ),
			'submit'			=> esc_html__( 'Отправить', 'houzez' ),
			'search_listing'	=> esc_html__( 'Поисковый список', 'houzez' ),
			'published'			=> esc_html__( 'Опубликовано', 'houzez' ),
			'pending'			=> esc_html__( 'В ожидании', 'houzez' ),
			'expired'			=> esc_html__( 'Истекший', 'houzez' ),


			'floor_plan_for'	=> esc_html__( 'Планы этажа для', 'houzez' ),
			'floor_plans'		=> esc_html__( 'Планы этажа', 'houzez' ),
			'plan_title'		=> esc_html__( 'Название плана', 'houzez' ),
			'plan_bedrooms'		=> esc_html__( 'План спален', 'houzez' ),
			'plan_bathrooms'	=> esc_html__( 'План ванных', 'houzez' ),
			'plan_price'		=> esc_html__( 'Цена плана', 'houzez' ),
			'plan_postfix'		=> esc_html__( 'План', 'houzez' ),
			'plan_size'			=> esc_html__( 'Размер плана', 'houzez' ),
			'plan_image'		=> esc_html__( 'Описание плана', 'houzez' ),
			'upload'			=> esc_html__( 'Загрузка', 'houzez' ),
			'add_more'			=> esc_html__( 'Добавить больше', 'houzez' ),

			'search_invoices'	=> esc_html__( 'Поиск счетов', 'houzez' ),
			'total_invoices'	=> esc_html__( 'Все счета:', 'houzez' ),
			'start_date'		=> esc_html__( 'Стартовая дата', 'houzez' ),
			'end_date'			=> esc_html__( 'Конечная дата', 'houzez' ),
			'invoice_type'		=> esc_html__( 'Тип', 'houzez' ),
			'invoice_listing'	=> esc_html__( 'Список', 'houzez' ),
			'invoice_package'	=> esc_html__( 'Пакет', 'houzez' ),
			'invoice_feat_list'		=> esc_html__( 'Список с рекомендуемыми', 'houzez' ),
			'invoice_upgrade_list'	=> esc_html__( 'Обновление до рекомендуемых', 'houzez' ),
			'invoice_status'	=> esc_html__( 'Статус', 'houzez' ),
			'paid'				=> esc_html__( 'Оплачено', 'houzez' ),
			'not_paid'			=> esc_html__( 'Не оплачено', 'houzez' ),
			'order'				=> esc_html__( 'Порядок', 'houzez' ),
			'view_details'		=> esc_html__( 'Посмотреть детали', 'houzez' ),
			'payment_details'	=> esc_html__( 'Детали оплаты', 'houzez' ),
			'property_title'	=> esc_html__( 'Название объекта', 'houzez' ),
			'billing_type'		=> esc_html__( 'Тип платежа', 'houzez' ),
			'invoice_price'		=> esc_html__( 'Цена:', 'houzez' ),
			'customer_details'	=> esc_html__( 'Детали о покупателе:', 'houzez' ),
			'customer_name'		=> esc_html__( 'Имя:', 'houzez' ),
			'customer_email'	=> esc_html__( 'Email:', 'houzez' ),


			'mu_for'	=> esc_html__( 'Множественные объекты для', 'houzez' ),
			'multi_unit'	=> esc_html__( 'Множественные объекты ', 'houzez' ),
			'mu_title'	=> esc_html__( 'Название', 'houzez' ),
			'mu_beds'	=> esc_html__( 'Спальни', 'houzez' ),
			'mu_baths'	=> esc_html__( 'Ванные', 'houzez' ),
			'mu_prop_size'	=> esc_html__( 'Размер объекта', 'houzez' ),
			'mu_size_postfix'	=> esc_html__( 'Размер', 'houzez' ),
			'mu_price'	=> esc_html__( 'Цена', 'houzez' ),
			'mu_price_postfix'	=> esc_html__( 'Цена', 'houzez' ),
			'mu_prop_type'	=> esc_html__( 'Тип объекта', 'houzez' ),
			'mu_date'	=> esc_html__( 'Доступная дата', 'houzez' ),

			//Add property
			'prop_des_price'	=> esc_html__( 'Описание и цена объекта', 'houzez' ),
			'prop_title'	=> esc_html__( 'Название объекта', 'houzez' ),
			'prop_title_placeholder'	=> esc_html__( 'Введите название вашего объекта', 'houzez' ),
			'prop_des'	=> esc_html__( 'Описание', 'houzez' ),
			'prop_type'	=> esc_html__( 'Тип', 'houzez' ),
			'prop_status'	=> esc_html__( 'Статус', 'houzez' ),
			'prop_label'	=> esc_html__( 'Метка', 'houzez' ),
			'prop_sale_rent_price'	=> esc_html__( 'Стоимость продажи или аренды', 'houzez' ),
			'prop_sale_rent_price_placeholder'	=> esc_html__( 'Введите стоимость продажи или аренды', 'houzez' ),
			'prop_second_price'	=> esc_html__( 'Вторая цена (опционально)', 'houzez' ),
			'prop_second_price_placeholder'	=> esc_html__( 'Введите вторую цену вашего объекта', 'houzez' ),
			'prop_price_label'	=> esc_html__( 'По типу цены (например: помесячно)', 'houzez' ),
			'prop_price_prefix'	=> esc_html__( 'Цена (например: начиная с)', 'houzez' ),
			'prop_price_prefix_placeholder'	=> esc_html__( 'Ввведите перед ценой', 'houzez' ),
			'prop_price_label_placeholder'	=> esc_html__( 'Введите после цены', 'houzez' ),


			'agent_information'	=> esc_html__( 'Информация о агенте', 'houzez' ),
			'what_display_agentbox'	=> esc_html__( 'Что отображать в окне с информацией о агенте?', 'houzez' ),
			'author_info'	=> esc_html__( 'Авторская информация.', 'houzez' ),
			'agent_info'	=> esc_html__( 'Информация о агенте. ( Выберите агента ниже)', 'houzez' ),
			'hide_info_box'	=> esc_html__( 'Спрятать информационное окно', 'houzez' ),



			'saved_search_not_found'=> esc_html__( 'У вас нет никакого сохраненного поиска', 'houzez' ),
			'properties_not_found'=> esc_html__( 'У вас еще нет объектов!', 'houzez' ),
			'favorite_not_found'=> esc_html__( 'У вас еще нет избранных объектов!', 'houzez' ),
			'email_already_registerd' => esc_html__( 'Этот email уже зарегистрирован', 'houzez' ),
			'invalid_email' => esc_html__( 'Неверный email.', 'houzez' ),
			'houzez_plugin_required' => esc_html__( 'Please install and activate Houzez theme functionality plugin', 'houzez' ),


			/*------------------------------------------------------
			* Shortcodes
			*------------------------------------------------------*/
			// Agents
			'view_profile' => esc_html__( 'Посмотреть профиль', 'houzez' ),

			/*------------------------------------------------------
			* Common
			*------------------------------------------------------*/
			'next_text' => esc_html__('След.', 'houzez'),
			'prev_text' => esc_html__('Пред.', 'houzez'),

			/*------------------------------------------------------
			* Custom Post Types
			*------------------------------------------------------*/


			/*------------------------------------------------------
			* Theme Options
			*------------------------------------------------------*/
			'general' => esc_html__( 'Общий', 'houzez' ),


		);
}



		return $localization;
	}
}
