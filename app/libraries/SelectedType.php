// // <?php
// // class ChoosenType {
// //     public function getProjectRateType($projectType)
// //     {
// //         $className =  ucfirst($projectType);

// //         if( ! class_exists($className)) {
// //             throw new \RuntimeException('Incorrect project type');
// //         }
        
// //         return new $className;
// //     }
// // }
// // class SelectedType {
    
// // //     protected $type;
// // //     protected $book;
// // //     protected $DVD;
// // //     protected $furniture;
    
    
// // //     public function displayInputs(){
// // //         $data = [
// // //           'Type' =>  filter_input(INPUT_POST, 'Type', FILTER_SANITIZE_STRING),
// // //         ];

// // //         $Book = ($data['Type']['Book']);
// // //         $DVD = ($data['Type']['DVD']);
// // //         $Furniture = ($data['Type']['Furniture']);
           
 
// // //         $lookupArray = [
// // //             $Book => new BookType,
// // //             $DVD => new DVDType,
// // //             $Furniture => new FurnitureType
// // //             ];
// // //             if (!array_key_exists($this->type, $lookupArray)){
// // //                 echo "Incorrect";
// // //             }
// // //             foreach ($lookupArray as $key){
// // //             $className = "$lookupArray[$key]";
            
// // //             return (new $className);
// // //             }
// // //     }
// // // }

// // // {

// //     protected $type;
// //     protected $baseDesignRate = 3;
// //     protected $baseStrategyRate = 2;
// //     protected $baseDevelopmentRate = 1;

// //     private $simpleFactory;

// //     public function __construct(ChoosenType $simpleFactory)
// //     {
// //         $this->simpleFactory = $simpleFactory;
// //     }
// //     public function setType($type){
// //         $choosen = ChoosonType;
// //         $choosen ->getProjectRateType($projectType);
// //         $type = $projectType;
// //     }

// //     public function displayInputs()
// //     {
// //         $choosenType = $this->simpleFactory->getProjectRateType($this->type);

// //         return $choosenType->displayInputs($this);
// //     }
// // }



// class SelectedType{
//     protected $displayInputs;
    
//     public function __construct($displayInputs){
//             $this->displayInputs = $displayInputs;
//         }
//     public function callInput(ProductType $type){
//       $type->displayInputs( $this->displayInputs) ;
//     }
// }