<?php

namespace Rockads\Connect\Snapchat\Entity\Report;


/**
 * Class Conversion
 * @package Rockads\Connect\Snapchat\Entity\Report
 */
class Conversion
{
    /**
     * @var int
     */
    private $purchases;
    /**
     * @var int
     */
    private $purchasesValue;
    /**
     * @var int
     */
    private $save;
    /**
     * @var int
     */
    private $startCheckout;
    /**
     * @var int
     */
    private $addCart;
    /**
     * @var int
     */
    private $viewContent;
    /**
     * @var int
     */
    private $addBilling;
    /**
     * @var int
     */
    private $signUps;
    /**
     * @var int
     */
    private $searches;
    /**
     * @var int
     */
    private $levelCompletes;
    /**
     * @var int
     */
    private $appOpens;
    /**
     * @var int
     */
    private $pageViews;
    /**
     * @var int
     */
    private $subscribe;
    /**
     * @var int
     */
    private $adClick;
    /**
     * @var int
     */
    private $adView;

    /**
     * @var int
     */
    private $completeTutorial;

    /**
     * @var int
     */
    private $invite;

    /**
     * @var int
     */
    private $login;

    /**
     * @var int
     */
    private $share;

    /**
     * @var int
     */
    private $reserve;

    /**
     * @var int
     */
    private $achievementUnlocked;


    /**
     * @var int
     */
    private $spendCredits;


    /**
     * @var int
     */
    private $rate;

    /**
     * @var int
     */
    private $startTrial;

    /**
     * @var int
     */
    private $listView;

    /**
     * @var int
     */
    private $addToWishlist;

    /**
     * @var int
     */
    private $addToCard;

    /**
     * @return int
     */
    public function getPurchases(): int
    {
        return $this->purchases;
    }

    /**
     * @param int $purchases
     * @return Conversion
     */
    public function setPurchases(int $purchases): Conversion
    {
        $this->purchases = $purchases;
        return $this;
    }

    /**
     * @return int
     */
    public function getPurchasesValue(): int
    {
        return $this->purchasesValue;
    }

    /**
     * @param int $purchasesValue
     * @return Conversion
     */
    public function setPurchasesValue(int $purchasesValue): Conversion
    {
        $this->purchasesValue = $purchasesValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getSave(): int
    {
        return $this->save;
    }

    /**
     * @param int $save
     * @return Conversion
     */
    public function setSave(int $save): Conversion
    {
        $this->save = $save;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartCheckout(): int
    {
        return $this->startCheckout;
    }

    /**
     * @param int $startCheckout
     * @return Conversion
     */
    public function setStartCheckout(int $startCheckout): Conversion
    {
        $this->startCheckout = $startCheckout;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddCart(): int
    {
        return $this->addCart;
    }

    /**
     * @param int $addCart
     * @return Conversion
     */
    public function setAddCart(int $addCart): Conversion
    {
        $this->addCart = $addCart;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewContent(): int
    {
        return $this->viewContent;
    }

    /**
     * @param int $viewContent
     * @return Conversion
     */
    public function setViewContent(int $viewContent): Conversion
    {
        $this->viewContent = $viewContent;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddBilling(): int
    {
        return $this->addBilling;
    }

    /**
     * @param int $addBilling
     * @return Conversion
     */
    public function setAddBilling(int $addBilling): Conversion
    {
        $this->addBilling = $addBilling;
        return $this;
    }

    /**
     * @return int
     */
    public function getSignUps(): int
    {
        return $this->signUps;
    }

    /**
     * @param int $signUps
     * @return Conversion
     */
    public function setSignUps(int $signUps): Conversion
    {
        $this->signUps = $signUps;
        return $this;
    }

    /**
     * @return int
     */
    public function getSearches(): int
    {
        return $this->searches;
    }

    /**
     * @param int $searches
     * @return Conversion
     */
    public function setSearches(int $searches): Conversion
    {
        $this->searches = $searches;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevelCompletes(): int
    {
        return $this->levelCompletes;
    }

    /**
     * @param int $levelCompletes
     * @return Conversion
     */
    public function setLevelCompletes(int $levelCompletes): Conversion
    {
        $this->levelCompletes = $levelCompletes;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppOpens(): int
    {
        return $this->appOpens;
    }

    /**
     * @param int $appOpens
     * @return Conversion
     */
    public function setAppOpens(int $appOpens): Conversion
    {
        $this->appOpens = $appOpens;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageViews(): int
    {
        return $this->pageViews;
    }

    /**
     * @param int $pageViews
     * @return Conversion
     */
    public function setPageViews(int $pageViews): Conversion
    {
        $this->pageViews = $pageViews;
        return $this;
    }

    /**
     * @return int
     */
    public function getSubscribe(): int
    {
        return $this->subscribe;
    }

    /**
     * @param int $subscribe
     * @return Conversion
     */
    public function setSubscribe(int $subscribe): Conversion
    {
        $this->subscribe = $subscribe;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdClick(): int
    {
        return $this->adClick;
    }

    /**
     * @param int $adClick
     * @return Conversion
     */
    public function setAdClick(int $adClick): Conversion
    {
        $this->adClick = $adClick;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdView(): int
    {
        return $this->adView;
    }

    /**
     * @param int $adView
     * @return Conversion
     */
    public function setAdView(int $adView): Conversion
    {
        $this->adView = $adView;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompleteTutorial(): int
    {
        return $this->completeTutorial;
    }

    /**
     * @param int $completeTutorial
     * @return Conversion
     */
    public function setCompleteTutorial(int $completeTutorial): Conversion
    {
        $this->completeTutorial = $completeTutorial;
        return $this;
    }

    /**
     * @return int
     */
    public function getInvite(): int
    {
        return $this->invite;
    }

    /**
     * @param int $invite
     * @return Conversion
     */
    public function setInvite(int $invite): Conversion
    {
        $this->invite = $invite;
        return $this;
    }

    /**
     * @return int
     */
    public function getLogin(): int
    {
        return $this->login;
    }

    /**
     * @param int $login
     * @return Conversion
     */
    public function setLogin(int $login): Conversion
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return int
     */
    public function getShare(): int
    {
        return $this->share;
    }

    /**
     * @param int $share
     * @return Conversion
     */
    public function setShare(int $share): Conversion
    {
        $this->share = $share;
        return $this;
    }

    /**
     * @return int
     */
    public function getReserve(): int
    {
        return $this->reserve;
    }

    /**
     * @param int $reserve
     * @return Conversion
     */
    public function setReserve(int $reserve): Conversion
    {
        $this->reserve = $reserve;
        return $this;
    }

    /**
     * @return int
     */
    public function getAchievementUnlocked(): int
    {
        return $this->achievementUnlocked;
    }

    /**
     * @param int $achievementUnlocked
     * @return Conversion
     */
    public function setAchievementUnlocked(int $achievementUnlocked): Conversion
    {
        $this->achievementUnlocked = $achievementUnlocked;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpendCredits(): int
    {
        return $this->spendCredits;
    }

    /**
     * @param int $spendCredits
     * @return Conversion
     */
    public function setSpendCredits(int $spendCredits): Conversion
    {
        $this->spendCredits = $spendCredits;
        return $this;
    }

    /**
     * @return int
     */
    public function getRate(): int
    {
        return $this->rate;
    }

    /**
     * @param int $rate
     * @return Conversion
     */
    public function setRate(int $rate): Conversion
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return int
     */
    public function getStartTrial(): int
    {
        return $this->startTrial;
    }

    /**
     * @param int $startTrial
     * @return Conversion
     */
    public function setStartTrial(int $startTrial): Conversion
    {
        $this->startTrial = $startTrial;
        return $this;
    }

    /**
     * @return int
     */
    public function getListView(): int
    {
        return $this->listView;
    }

    /**
     * @param int $listView
     * @return Conversion
     */
    public function setListView(int $listView): Conversion
    {
        $this->listView = $listView;
        return $this;
    }

    /**
     * @return int
     */
    public function getAddToWishlist(): int
    {
        return $this->addToWishlist;
    }

    /**
     * @return int
     */
    public function getAddToCard(): int
    {
        return $this->addToCard;
    }

    /**
     * @param int $addToCard
     * @return Conversion
     */
    public function setAddToCard(int $addToCard): Conversion
    {
        $this->addToCard = $addToCard;
        return $this;
    }


    /**
     * @param int $addToWishlist
     * @return Conversion
     */
    public function setAddToWishlist(int $addToWishlist): Conversion
    {
        $this->addToWishlist = $addToWishlist;
        return $this;
    }


    /**
     * @param array $data
     */
    public function load($data)
    {

        $this->purchases = isset($data['conversion_purchases']) ? $data['conversion_purchases'] : 0;
        $this->purchasesValue = isset($data['conversion_purchases_value']) ? $data['conversion_purchases_value'] : 0;
        $this->share = isset($data['conversion_share']) ? $data['conversion_share'] : 0;
        $this->reserve = isset($data['conversion_reserve']) ? $data['conversion_reserve'] : 0;
        $this->startCheckout = isset($data['conversion_start_checkout']) ? $data['conversion_start_checkout'] : 0;
        $this->addToCard = isset($data['conversion_add_cart']) ? $data['conversion_add_cart'] : 0;
        $this->viewContent = isset($data['conversion_view_content']) ? $data['conversion_view_content'] : 0;
        $this->addBilling = isset($data['conversion_add_billing']) ? $data['conversion_add_billing'] : 0;
        $this->signUps = isset($data['conversion_sign_ups']) ? $data['conversion_sign_ups'] : 0;
        $this->searches = isset($data['conversion_searches']) ? $data['conversion_searches'] : 0;
        $this->levelCompletes = isset($data['conversion_level_completes']) ? $data['conversion_level_completes'] : 0;
        $this->appOpens = isset($data['conversion_app_opens']) ? $data['conversion_app_opens'] : 0;
        $this->pageViews = isset($data['conversion_page_views']) ? $data['conversion_page_views'] : 0;
        $this->subscribe = isset($data['conversion_subscribe']) ? $data['conversion_subscribe'] : 0;
        $this->adClick = isset($data['conversion_ad_click']) ? $data['conversion_ad_click'] : 0;
        $this->adView = isset($data['conversion_ad_view']) ? $data['conversion_ad_view'] : 0;
        $this->completeTutorial = isset($data['conversion_complete_tutorial']) ? $data['conversion_complete_tutorial'] : 0;
        $this->invite = isset($data['conversion_invite']) ? $data['conversion_invite'] : 0;
        $this->login = isset($data['conversion_login']) ? $data['conversion_login'] : 0;
        $this->share = isset($data['conversion_share']) ? $data['conversion_share'] : 0;
        $this->reserve = isset($data['conversion_reserve']) ? $data['conversion_reserve'] : 0;
        $this->achievementUnlocked = isset($data['conversion_achievement_unlocked']) ? $data['conversion_achievement_unlocked'] : 0;
        $this->addToWishlist = isset($data['conversion_add_to_wishlist']) ? $data['conversion_add_to_wishlist'] : 0;
        $this->spendCredits = isset($data['conversion_spend_credits']) ? $data['conversion_spend_credits'] : 0;
        $this->rate = isset($data['conversion_rate']) ? $data['conversion_rate'] : 0;
        $this->startTrial = isset($data['conversion_start_trial']) ? $data['conversion_start_trial'] : 0;
        $this->listView = isset($data['conversion_list_view']) ? $data['conversion_list_view'] : 0;

        return $this;

    }


}