<?php
class BookType extends ProductType {
        
    public function displayInputs(){
        return <<<'EOT'
            <script language="javascript">

            document.getElementById("Book-div").style.display = "block";
    
            </script>
EOT;
    }
}