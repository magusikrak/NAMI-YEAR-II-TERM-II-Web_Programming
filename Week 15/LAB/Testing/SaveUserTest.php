<?php
class SaveUserTest extends \PHPUnit\Framework\TestCase
{
    public function testNODOB()
    {
        $users = new DatabaseTable("person");
        $testdata = [
            'firstname' => "ram",
            'surname' => "sharma",
            'email' => "2@gmail.com",
            'birthday' => ""

        ];
        $check = $users->insert($testdata);
        $this->assertTrue($check);
    }
}
