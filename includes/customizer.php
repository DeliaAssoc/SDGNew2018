<?php 
function sdgnew_customizer( $wp_customize ) {

	// Customizer Sections
	// Company Information
	$wp_customize->add_section( 'sdgnew_companyinfo_section' , array(
	    'title'       => __( 'Company Information', 'heim' ),
	    'priority'    => 10,
	    'description' => 'Enter company information',
	) );

	// Social Media
	$wp_customize->add_section( 'sdgnew_social_section' , array(
	    'title'       => __( 'Social Media', 'heim' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links',
	) );


	// Remove default sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );


	// Customizer Settings
	// Company Information
	$wp_customize->add_setting( 'sdgnew_companyinfo_section', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_name', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_street', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_city', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_state', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_zip', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_country', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_gmap', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_phone', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_tollfree', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_fax', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_email', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_company_descriptor', array( 'default' => __( '' ), 'heim' ) );
	// Social Media
	$wp_customize->add_setting( 'sdgnew_social' );
	$wp_customize->add_setting( 'sdgnew_social_facebook_link', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_social_twitter_link', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_social_gplus_link', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_social_linkedin_link', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_social_youtube_link', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_social_vimeo_link', array( 'default' => __( '' ), 'heim' ) );
	$wp_customize->add_setting( 'sdgnew_social_pinterest_link', array( 'default' => __( '' ), 'heim' ) );

	// Customizer Controls
	// Company Information
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_name', array(
	    'label'    => __( 'Company Name', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_name',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_street', array(
	    'label'    => __( 'Street Address', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_street',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_city', array(
	    'label'    => __( 'City', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_city',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_state', array(
	    'label'    => __( 'State', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_state',
	    'type'     => 'select',
	    'choices'  => array(
	        'AL' => 'Alabama',
	        'AK' => 'Alaska',
	        'AZ' => 'Arizona',
	        'AR' => 'Arkansas',
	        'CA' => 'California',
	        'CO' => 'Colorado',
	        'CT' => 'Connecticut',
	        'DE' => 'Delaware',
	        'DC' => 'District of Columbia',
	        'FL' => 'Florida',
	        'GA' => 'Georgia',
	        'HI' => 'Hawaii',
	        'ID' => 'Idaho',
	        'IL' => 'Illinois',
	        'IN' => 'Indiana',
	        'IA' => 'Iowa',
	        'KS' => 'Kansas',
	        'KY' => 'Kentucky',
	        'LA' => 'Louisiana',
	        'ME' => 'Maine',
	        'MD' => 'Maryland',
	        'MA' => 'Massachusetts',
	        'MI' => 'Michigan',
	        'MN' => 'Minnesota',
	        'MS' => 'Mississippi',
	        'MO' => 'Missouri',
	        'MT' => 'Montana',
	        'NE' => 'Nebraska',
	        'NV' => 'Nevada',
	        'NH' => 'New Hampshire',
	        'NJ' => 'New Jersey',
	        'NM' => 'New Mexico',
	        'NY' => 'New York',
	        'NC' => 'North Carolina',
	        'ND' => 'North Dakota',
	        'OH' => 'Ohio',
	        'OK' => 'Oklahoma',
	        'OR' => 'Oregon',
	        'PA' => 'Pennsylvania',
	        'RI' => 'Rhode Island',
	        'SC' => 'South Carolina',
	        'SD' => 'South Dakota',
	        'TN' => 'Tennessee',
	        'TX' => 'Texas',
	        'UT' => 'Utah',
	        'VT' => 'Vermont',
	        'VA' => 'Virginia',
	        'WA' => 'Washington',
	        'WV' => 'West Virginia',
	        'WI' => 'Wisconsin',
	        'WY' => 'Wyoming' )
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_zip', array(
	    'label'    => __( 'Zip Code', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_zip',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_country', array(
	    'label'    => __( 'Country', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_country',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_gmap', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Google Map', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_gmap',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_phone', array(
	    'label'    => __( 'Local Phone', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_phone',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_tollfree', array(
	    'label'    => __( 'Toll Free Phone', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_tollfree',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_fax', array(
	    'label'    => __( 'Fax', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_fax',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_email', array(
	    'label'    => __( 'Email', 'heim' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_email',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_company_descriptor', array(
        'label'    => __( 'Descriptor', 'heim' ),
        'description' => __( 'Enter the text that will appear at the top of the site left hand side' ),
	    'section'  => 'sdgnew_companyinfo_section',
	    'settings' => 'sdgnew_company_descriptor',
	    'type'	   => 'textarea',
	) ) );

	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_facebook_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_twitter_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_gplus_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_linkedin_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_youtube_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_vimeo_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdgnew_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'heim' ),
	    'section'  => 'sdgnew_social_section',
	    'settings' => 'sdgnew_social_pinterest_link',
	) ) );
}

add_action( 'customize_register', 'sdgnew_customizer' );