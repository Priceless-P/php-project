import "../styles.css";
import Card from '../shared/Card'

function ProductItem({item}){
//const { feedback} = useContext(ProductsContext)

return(
 <Card>
 <input type='checkbox'/>
 <h1>{item.rating} </h1>
<p>{item.text} </p>
 </Card>
)
}
export default ProductItem;