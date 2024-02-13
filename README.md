## simple_csv_reader_CI
It is simple csv reader for codeigniter 3x written in core php without any external dependency.
It is a simpler and updated version to [alemohamad-ci-csv-reader](https://github.com/alemohamad/ci-csv-reader).
it solved the problem where if the fields includes "," it will skip that row.

##  Requirement
codeigniter 3x
php version >5.2

## how to use
place this file in library folder of codeigniter and access this in you code by:

```
$this->load->library('ImportCSV');
$csvData = $this->ImportCSV->get_csv_data('path/to/Test.csv'); //path to csv file
```
## accepted formats
name,phone,location,skills

Some name,123456789,abc,"Canva, Effective Communication, Search Engine Optimization (SEO), Social Media Marketing, Search Engine Marketing (SEM)"
Some Othername,123456789, abfdfc, web development


