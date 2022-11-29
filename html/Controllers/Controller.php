<?php

namespace Controllers;

/**
 * Parent class for all controllers
 */
class Controller 
{
    /**
     * Calculate the number of lines for a given number of elements per line
     * @param int $numberOfElements
     * @param int $elementsPerLine
     * @return int Number of lines
     */
    protected function numberOfLines(int $numberOfElements, int $elementsPerLine): int 
    {
        return ceil($numberOfElements / $elementsPerLine);
    }

    /**
     * Calculate the number of elements on the last line for a chosen number of elements per line
     * @param int $numberOfImages
     * @param int $imagesPerLine
     * @return int The number of elements on the last line
     */
    protected function elementsOnLastLine(int $numberOfElements, int $imagesPerLine):int 
    {
        return $numberOfElements % 3 === 0 ? $imagesPerLine : $numberOfElements % $imagesPerLine;
    }

    protected function buildLines($data, $numberOfLines, $elementsPerLine): array {
        $allLinesWithData = [];
        for ($i=0; $i < $numberOfLines; $i++) { 
            // $allLinesWithData[] = [][][]
            foreach($data as $key => $value) {
                if (($key+1) % $elementsPerLine == 0) {

                }
            }
        }
    }
}