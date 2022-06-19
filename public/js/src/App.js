import "./styles.css";
import {BrowserRouter as Router, Routes, Route} from 'react-router-dom'
import Header from "./components/Header"
import {ProductsProvider} from "./context/ProductsContext"
import FeedbackList from "./components/FeedbackList"
import AddProduct from "./pages/AddProduct"


export default function App() {

  return (
    <ProductsProvider>
    <Router>
    <Header />
    
    <Routes>

      {/* add new Product Component*/}
      <Route path ='/addProduct' element={
      <AddProduct />
     
      } />
      <Route path ='/' element ={
     <FeedbackList />
     }/>

      </Routes>
      </Router>

    </ProductsProvider>
  );
}
