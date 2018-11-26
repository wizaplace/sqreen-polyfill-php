<?php

namespace sqreen;

if (!extension_loaded('sqreen')) {

    /**
     * @param boolean $success
     * @param array $user_identifiers
     * @see https://docs.sqreen.io/sqreen-for-php/php-sdk-for-user-monitoring/#login-tracking
     */
    function auth_track($success, $user_identifiers)
    {
    }

    /**
     * @param array $user_identifiers
     * @see https://docs.sqreen.io/sqreen-for-php/php-sdk-for-user-monitoring/#signup-tracking
     */
    function signup_track($user_identifiers)
    {
    }

    /**
     * @param array $user_identifiers
     * @param array $traits
     * @see https://docs.sqreen.io/sqreen-for-php/php-sdk-for-user-monitoring/#session-tracking
     */
    function identify($user_identifiers, $traits = [])
    {
    }

    /**
     * @param string $event_name
     * @param array $options
     * @see https://docs.sqreen.io/sqreen-for-php/tracking-custom-events/
     */
    function track($event_name, $options = [])
    {
    }

}
