<?php

class HostingerApiMock
{
    protected $username = '';
    protected $password = '';
    protected $api_url = '';

    /**
     * $config['username'] string
     * $config['password'] string
     * $config['api_url']  string Must end with '/'
     *
     * @param array $config (See above)
     */
    public function __construct($config)
    {
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->api_url = $config['api_url'];
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $subject
     * @param string $content
     * @return array
     * @throws HostingerApiException
     */
    public function publicTicketCreate($name, $email, $subject, $content){
        return array(
            'id'   => '1',
            'hash' => 'd026322e4bce0c7003bae31e688cf97eda9c73a5',
            'link' => 'http://hostinger.vm',
        );
    }

    /**
     * @param int $id
     * @return array
     * @throws HostingerApiException
     */
    public function clientGetById($id){
        return array(
            'id'            =>  $id,
            'email'         =>  'demo@demo.com',
            'pass'          =>  'd026322e4bce0c7003bae31e688cf97eda9c73a5',
            'first_name'    =>  'John',
            'last_name'     =>  'Smith',
            'company'       =>  'Smith Inc.',
            'address_1'     =>  'Best street 11-11',
            'address_2'     =>  '',
            'city'          =>  'Kaunas',
            'country'       =>  'LT',
            'state'         =>  'Kauno',
            'zip'           =>  'LT-12345',
            'phone'         =>  '60000000',
            'phone_cc'      =>  '370',
            'cpf'           =>  '',
            'created_at'    =>  '2018-01-01 00:01:01',
        );
    }

    /**
     * @param $hash
     * @return array
     * @throws HostingerApiException
     */
    public function clientGetByLoginHash($hash){
        return array(
            'id'            =>  '1',
            'email'         =>  'demo@demo.com',
            'status'        =>  'active',
            'pass'          =>  'd026322e4bce0c7003bae31e688cf97eda9c73a5',
            'first_name'    =>  'John',
            'last_name'     =>  'Smith',
            'company'       =>  'Smith Inc.',
            'address_1'     =>  'Best street 11-11',
            'address_2'     =>  '',
            'city'          =>  'Kaunas',
            'country'       =>  'LT',
            'state'         =>  'Kauno',
            'zip'           =>  'LT-12345',
            'phone'         =>  '60000000',
            'phone_cc'      =>  '370',
            'cpf'           =>  '',
            'vat_code'      =>  '12345',
            'passport'      =>  '',
            'birthday'      =>  '',
            'created_at'    =>  '2018-01-01 00:01:01',
        );
    }

    /**
     * @param string $email
     * @return array
     * @throws HostingerApiException
     */
    public function clientGetByEmail($email){
        return array(
            'id'            =>  1,
            'email'         =>  $email,
            'pass'          =>  'd026322e4bce0c7003bae31e688cf97eda9c73a5',
            'first_name'    =>  'John',
            'last_name'     =>  'Smith',
            'company'       =>  'Smith Inc.',
            'address_1'     =>  'Best street 11-11',
            'address_2'     =>  '',
            'city'          =>  'Kaunas',
            'country'       =>  'LT',
            'state'         =>  'Kauno',
            'zip'           =>  'LT-12345',
            'phone'         =>  '60000000',
            'phone_cc'      =>  '370',
            'cpf'           =>  '',
            'created_at'    =>  '2018-01-01 00:01:01',
        );
    }

    /**
     * @param string $email
     * @param string $password
     * @return array
     * @throws HostingerApiException
     */
    public function clientGetByEmailAndPassword($email, $password){
        return array(
            'id'            =>  '1',
            'email'         =>  'demo@demo.com',
            'status'        =>  $email,
            'pass'          =>  sha1($password),
            'first_name'    =>  'John',
            'last_name'     =>  'Smith',
            'company'       =>  'Smith Inc.',
            'address_1'     =>  'Best street 11-11',
            'address_2'     =>  '',
            'city'          =>  'Kaunas',
            'country'       =>  'LT',
            'state'         =>  'Kauno',
            'zip'           =>  'LT-12345',
            'phone'         =>  '60000000',
            'phone_cc'      =>  '370',
            'cpf'           =>  '',
            'vat_code'      =>  '12345',
            'passport'      =>  '',
            'birthday'      =>  '',
            'created_at'    =>  '2018-01-01 00:01:01',
        );
    }
    
    /**
     * @param string $email
     * @return array
     * @throws HostingerApiException
     */
    public function clientGetByEmailOauthOnly($email){
        return array(
            'id' =>  1,
            'oauth' => 'google',
        );
    }

    /**
     * @param string $email
     * @return array
     * @throws HostingerApiException
     */
    public function clientPasswordRemind($email){
        return true;
    }

    /**
     * @param string $first_name
     * @param string $password
     * @param string $email
     * @param array $additionalParams
     * @return array
     * @throws HostingerApiException
     */
    public function clientCreate($first_name, $password, $email, $additionalParams = array())
    {
        return array(
            'id' =>  1,
            'link' =>  'http://hostinger.vm',
        );
    }

    /**
     * @param $client_id
     * @param $title
     * @param array $ns_list
     * @param array $contact
     * @return mixed
     * @throws HostingerApiException
     */
    public function clientWhoisProfileCreate($client_id, $title, array $ns_list, array $contact) {
        return true;
    }

    /**
     * Get Cart catalog
     *
     * @return array
     * @throws HostingerApiException
     */
    public function cartCatalog()
    {
        return null;
    }

    /**
     * @return array
     * @throws HostingerApiException
     */
    public function cartOrderCreate($checkout, $gatewayCode, $campaign = '', $ip = '', $affiliateId = null, $affiliate_subid = null)
    {
        return array(
            'invoice' => array(
                'id' => 1,
                'hash' => 'd026322e4bce0c7003bae31e688cf97eda9c73a5',
            ),
            'invoice_url'  => 'http://hostinger.vm',
            'payment_url'  => 'http://hostinger.vm',
            'redirect_url' => 'http://hostinger.vm',
        );
    }

    /**
     * @param int $client_id
     * @return boolean
     * @throws HostingerApiException
     */
    public function cartAllowOrderFreeHosting($client_id)
    {
        return true;
    }

    /**
     * @param int $client_id
     * @return boolean
     * @throws HostingerApiException
     */
    public function cartAllowOrderTrial($client_id)
    {
        return true;
    }


    /**
     * @param int $client_id
     * @return boolean
     * @throws HostingerApiException
     */
    public function cartHasPricedProducts($client_id)
    {
       return true;
    }

    public function cartAllowItemAdd($slug, $params = array())
    {
        return true;
    }

    /**
     * @param int $order_id
     * @param int $client_id
     * @return boolean
     * @throws HostingerApiException
     */
    public function cartCheckUpgradeOrderAndClient($order_id, $client_id)
    {
        return false;
    }

    /**
     * @param int $client_id
     * @param string $redirect
     * @return string Url to cpanel auto login
     * @throws HostingerApiException
     */
    public function clientGetAutoLoginUrl($client_id, $redirect = '', $additionalParams = array()){
        return 'http://hostinger.vm';
    }

    /**
     * @param $access_hash
     * @return array
     * @throws HostingerApiException
     */
    public function getDelegateAccessInfoByHash($access_hash){
        return array(
            'client_id' => 1,
            'email' => 'demo@demo.com',
        );
    }

    /**
     * @param string $from_email
     * @param string $from_name
     * @param string $to_email
     * @param string $to_name
     * @param string $subject
     * @param string $content_html
     * @param string $content_txt
     * @return array
     * @throws HostingerApiException
     */
    public function mailSend($from_email, $from_name, $to_email, $to_name, $subject, $content_html, $content_txt) {
        return true;
    }

    /**
     * @param $domain
     * @return bool
     * @throws HostingerApiException
     */
    public function domainIsAvailable($domain, $ip = '') {
        return true;
    }


    /**
     * @param $domain
     * @return array
     * @throws HostingerApiException
     */
    public function domainIsTransferable($domain)
    {
        return true;
    }

    /**
     * @param $email
     * @param $domain
     * @return bool
     * @throws HostingerApiException
     */
    public function domainLotteryEntry($email, $domain) {
        return true;
    }

    /**
     * @param integer $client_id
     * @param float $amount
     * @return array
     * @throws HostingerApiException
     */
    public function paymentGatewayGetList($client_id = null, $amount = null) {
        $list = array();
        $list[] = array(
            'payment_gateway_code' => 'balance',
            'name' => 'Pay with Balance',
            'description' => '',
        );
        return $list;
    }

    /**
     * @param string $redirect_url
     * @danger ?hash={client.login.hash} will be added to $redirect_url after success social login
     * @info use clientGetByLoginHash() to get returned client from social login
     * @return array
     * @throws HostingerApiException
     */
    public function oauthProviderGetList($redirect_url, $is_cart = 0, $utm_campaign = 0) {
        $list = array();
        $list[] = array(
            'provider' => 'google',
            'url' => 'http://hostinger.vm',
        );
        return $list;
    }

    /**
     * @return array
     * @throws HostingerApiException
     */
    public function countryGetList() {
        return array(
            'AF' => 'Afghanistan',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
        );
    }

    /**
     * @return array
     * @throws HostingerApiException
     */
    public function countryPhoneCodeGetList() {
        return array(
            'AD' => array(
                'country_name' => 'ANDORRA',
                'dial_code' => '376'
            ),
            'AE' => array(
                'country_name' => 'UNITED ARAB EMIRATES',
                'dial_code' => '971'
            ),
            'AF' => array(
                'country_name' => 'AFGHANISTAN',
                'dial_code' => '93'
            ),
            'AG' => array(
                'country_name' => 'ANTIGUA AND BARBUDA',
                'dial_code' => '1'
            ),
            'AI' => array(
                'country_name' => 'ANGUILLA',
                'dial_code' => '1'
            ),
            'AL' => array(
                'country_name' => 'ALBANIA',
                'dial_code' => '355'
            )
        );
    }

    /**
     * @return array
     * @throws HostingerApiException
     */
    public function knowledgeBaseGetList() {
        return array();
    }

    /**
     * Send transactional email for known client
     * @param string $event - event code name
     * @param int $client_id - client ID
     * @param array $params - params for the email template
     * @throws HostingerApiException
     * @return array
     */
    public function sendMailEventToClient($event, $client_id, $params = array()) {
        return true;
    }

    /**
     * Send transactional email when client id is not known, but email
     * @param string $event - event code name
     * @param string $email - valid email address
     * @param array $params - params for the email template
     * @throws HostingerApiException
     * @return array
     */
    public function sendMailEventToEmail($event, $email, $params = array()) {
        return true;
    }

    /**
     * @param $email - client email
     * @param $score - nps score 1 - 10
     * @return boolean
     * @throws HostingerApiException
     */
    public function reviewNetPromotionScoreCreate($email, $score, $comment = '', $account_type = '', $account_reason = '', $account_important = '', $account_not_important = '') {
        return true;
    }

    /**
     * Get approved list of reviews
     * @throws HostingerApiException
     * @return array
     */
    public function getReviews()
    {
        return array();
    }

    /**
     * Retrieves a list of resellers where a client has an account
     * @param $email
     * @param $password
     * @return array
     */
    public function clientGetAllByEmailAndPassword($email, $password) {
        return array();
    }

    /**
     * @return string
     */
    private function getIp()
    {
        $address = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : null;
        if (is_string($address)) {
            if (strpos($address, ',') !== false) {
                $address = explode(',', $address);
                $address = end($address);
            }
        }
        if (is_null($address)) {
            $address = $_SERVER['REMOTE_ADDR'];
        }
        return $address;
    }

    /**
     * @return array
     * @throws HostingerApiException
     */
    public function getTlds()
    {
        return array();
    }

    /**
     * @param array $result
     * @return array
     */
    public function getValidationErrorsForResult($result) {
        return array();
    }

    /**
     * @param array $params
     * @return array
     */
    public function registerDomainWithClient($params = array())
    {
        return array(
            'reseller_client_id' => 1,
            'reseller_client_order_id' => 1,
            'reseller_client_invoice_id' => 1,
            'redirect_url' => 'http://hostinger.vm',
            'invoice_url' => 'http://hostinger.vm',
        );
    }


    /**
     * @param numeric $invoice_id
     * Generated Auto Login to Invoice link
     * @return array
     */
    public function getAutoLoginLinkByInvoiceId($invoice_id)
    {
        return 'http://hostinger.vm';
    }

    /**
     * @param string $url
     * @param string $method
     * @param array $post_fields
     * @param string $user
     * @param string $password
     * @param int $timeout
     * @return array
     * @throws HostingerApiException
     */

    public function happiness_score(array $params) {
        return true;
    }

    public function is_registered_at_hostinger(array $params) {
        return true;
    }
    
    /**
     * Unlinks social by email
     * @param $email
     * @return array
     */
    public function unlinkOauthByEmail($email) {
        return true;
    }

    /**
     * @param $order_id
     * @param $service
     * @return mixed
     */
    public function cpanelGetSessionUrlByService($order_id, $service)
    {
        return 'http://hostinger.vm';
    }
    
}
