<?php

include_once "Member.php";

class Administrator extends Member
{

    public function createForum($forumName)
    {
        echo "$this->username created a new forum : $forumName <br>";
    }

    public function banMember($member)
    {
        echo "$this->username banned the Member : $member->username <br>";
    }
}
