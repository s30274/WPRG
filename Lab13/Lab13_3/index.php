<?php
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}
trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class AB {
    use A, B {
        B::smallTalk as bsmallTalk;
        B::bigTalk as bbigTalk;
        A::smallTalk insteadof B;
        A::bigTalk insteadof B;
    }
}

$class = new AB();

$class->smallTalk();
$class->bigTalk();
$class->bsmallTalk();
$class->bbigTalk();
