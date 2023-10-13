<?php
class Customization
{
    private string $fakeDomain = 'localhost/wordpress/wp-admin/';
    private string $base_url = 'https://byconsole.net/api/WooODTExtendedV3/api/V3/ODTManagementCheckout?pid=';
    protected string $api_url;
    protected string $plugin_expired_date; #NOTE - plugin end date.
    protected string $multiple_pickup_location; #NOTE - please do not touch this variable.
    protected string $plugins_activation_date;


    public function __construct()
    {
        $this->plugin_expired_date = $this->addOneYear();
        $this->plugins_activation_date = $this->getCurrentDateTime();
        # $this->api_url = $this->base_url . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        $this->api_url = $this->base_url . $this->fakeDomain;
        # var_dump($this->api_url);
    }

    /**
     * @desc This method using to get current date time.
     * NOTE - this method using for plugin activation date to make activation always today.
     * @return string
     */
    private function getCurrentDateTime(): string
    {
        $date = new DateTime();
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * @desc This method using to make a infinite circle of time.
     * @example make the expired date always 1 year and never end.
     * @return string
     */
    private function addOneYear(string $format = "Y-m-d"): string
    {
        $date = new DateTime('now');
        $interval = new DateInterval('P1Y');
        $date->add($interval);
        return $date->format($format);
    }
}