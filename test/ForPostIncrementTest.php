<?php


namespace test;


class ForPostIncrementTest implements ForTest
{
    /**
     * @param int $count
     */
    public function run(int $count): void
    {
        for ($i = 0; $i < $count; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                $this->nothing();
            }
        }
    }

    /**
     * @return void
     */
    private function nothing(): void
    {
        return;
    }
}