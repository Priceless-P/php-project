import "../styles.css";
import ProductItem from "./ProductItem"
import { useContext } from 'react';
import ProductsContext from '../context/ProductsContext'

function FeedbackList(){
 const { feedback} = useContext(ProductsContext)
   
 if(!feedback || feedback.length ===0) {
   return <p> No Products to display</p>
   }

return(
  <div className= 'product-list'>
 {feedback.map((item)=>
   <ProductItem key={item.id} item={item} />
 )}
  </div>
)
}
export default FeedbackList;