import {useState} from 'react';
import Axios from'axios';
import Card from '../shared/Card'

function AddProduct(){
  const [sku, setSku] = useState('');
  const [name, setName] = useState('');
  const [price, setPrice] = useState('');

  const handleSubmit= () =>{
Axios({
  method:'POST',
  url: '/add',
  headers:{

  },
  data:{
    sku,
    name,
    price
  }
})
.then((reponse)=>{
  console.log(reponse)
  })
  .catch((error)=>{
    console.log(error)
  })
  }
  return (
 <Card>
 <h3>Add New Item</h3>
 <form>
 <label htmlFor='sku'>SKU
 <input type='text'  onchange={e=>setSku(e.target.value)}/>
 </label>
 <label htmlFor='name'>Name
 <input type='text'  onchange={e=>setName(e.target.value)}/>
 </label>
 <label htmlFor='price'>Price
 <input type='text' onchange={e=>setPrice(e.target.value)}/>
 </label>
 <button type ='submit' onClick={handleSubmit}>Submit </button>

 </form> 
 </Card>
  )
}
export default AddProduct;