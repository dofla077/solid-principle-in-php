<?php

class A {
    public function fire() {}
}

class B extends A {
    public function fire() {}
}

interface LessonRepositoryInterface {
    /**
     * Fetch all records
     *
     * @return array
     */
    public function getALL();
}

class FileLessonRepository implements LessonRepositoryInterface {

    public function getALL()
    {
        // TODO: Implement getALL() method.
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface {

    public function getALL()
    {
        // TODO: Implement getALL() method.
        return Lesson::all()->toArray(); // violates the LSP
    }
}

function foo(LessonRepositoryInterface $lesson)
{
    $lesson->getALL();
}