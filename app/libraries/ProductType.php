<?php
 
abstract class ProductType implements Product
{
    private function typeName(): string
    {
        $pathname = get_class($this);
        $basename = ltrim(substr($pathname, (int)strrchr($pathname, '\\')), '\\');
        if (!str_ends_with($basename, 'Type')) {
            throw new BadMethodCallException('Hierarchy error');
        }

        return strtolower(substr($basename, 0, -4));
    }

    final public function displayInputs() : ?string
    {
       
            $idString = json_encode(sprintf('%s-div', $this->typeName()), JSON_THROW_ON_ERROR);

        return  '<<<HTML
        
            <script>document.getElementById($idString).style.display = "block";
            </script>

            HTML';
    }
    public static function option(string $ProductType): Product # was: self

    {
       
            $typetoCall= ("{$ProductType}Type");
            return new $typetoCall;
        
    }
}