<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CSV Reader for CodeIgniter 3.x
 *
 * Library to read the CSV file. It helps to import a CSV file
 * and convert CSV data into an associative array it treats the first row of a CSV file
 * as a column header row and retuns empty or full array. 
 *
 * @author      Sayan Guha

 */
class ImportCSV {
    
    function get_csv_data($filepath){
        
        // If file doesn't exist, return false
        if(!file_exists($filepath)){
            return [];            
        }
        
        // get csv filepath 
        $csv= file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        // Get Fields 
        $keys_values = explode(',', $csv[0]);
        $result=array();
        // get values
        for ($i=1; $i < count($csv); $i++) {
            $data=array(); 
            for ($j=0; $j < count($keys_values); $j++) { 
                
                $data[$keys_values[$j]]=str_getcsv($csv[$i])[$j];
            }

            array_push($result,$data);
        }
        
        return $result;
  
}
