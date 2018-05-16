<?php

namespace mikemix;

class Uuid extends \Ramsey\Uuid\Uuid
{
    /**
     * @param int|string $node A 48-bit number representing the hardware address
     *     This number may be represented as an integer or a hexadecimal string.
     * @param int $clockSeq A 14-bit number used to help avoid duplicates that
     *     could arise when the clock is set backwards in time or if the node ID
     *     changes.
     * @return string
     */
    public static function uuid6($node = null, $clockSeq = null)
    {
        return self::uuid1ToUuid6(parent::uuid1($node, $clockSeq)->toString());
    }

    /**
     * Convert UUID v1 to UUID v6.
     *
     * @see https://bradleypeabody.github.io/uuidv6/
     *
     * @param string $uuidString
     *
     * @return string
     */
    public static function uuid1ToUuid6($uuidString)
    {
        $uuidString = str_replace('-', '', $uuidString);
        $timeLow1 = substr($uuidString, 0, 5);
        $timeLow2 = substr($uuidString, 5, 3);
        $timeMid = substr($uuidString, 8, 4);
        $timeHigh = substr($uuidString, 13, 3);
        $rest = substr($uuidString, 16);

        return
            $timeHigh.$timeMid.$timeLow1[0].'-'.
            substr($timeLow1, 1).'-'.
            '6'.$timeLow2.'-'.
            substr($rest, 0, 4).'-'.
            substr($rest, 4);
    }
}
