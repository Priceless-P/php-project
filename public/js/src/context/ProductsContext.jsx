import {createContext, useState} from 'react';
import FeedbackData from "../data/FeedbackData";

 const ProductsContext = createContext();

 export const ProductsProvider = ({children}) => {
   

  const [feedback, setFeedBack] = useState(FeedbackData)
  return (
   <ProductsContext.Provider
   value={{
  feedback,
   }}
   >
  {children}
  </ProductsContext.Provider>
  )
}
export default ProductsContext;