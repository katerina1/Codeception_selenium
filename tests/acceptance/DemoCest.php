<?php 
 class DemoCest
{
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField(['xpath' => './/input[@name="userIdentifier"]'], 'katexrg@yahoo.com');
        $I->click('Log in');
        $I->wait(5);
        $I->see('Password');
        $I->click('Password');
        $I->wait(5);
        $I->fillField(['xpath' => './/input[@name="password"]'], 'Katerina1$' );
        $I->click('//*[@id="login-methods-body-user_credentials"]/div/form/div[2]/button');
        $I->wait(10);
        #S$I->click(['xpath' => './/button[@class="close ng-scope"]']);
        #$I->wait(5);
        $I->see('Log out');
        $I->seeInCurrentUrl('/account-overview/');
    }
    }


