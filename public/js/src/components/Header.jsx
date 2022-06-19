import {Link} from 'react-router-dom'
import "../styles.css"; 

function Header(){
  // const [isOpen, setIsOpen] = useState(false);
return (
  <header className='navbar'>
  <nav>
  <Link to= '/'>
  <span className='logo'>Scandiweb Project</span>
  </Link>
  </nav>
  <div className='menu-list'>
 <Link to= '/addProduct'>
  <button>Add New</button>
  </Link>
  <button className='del'>Delete Selected</button>
  </div>
  {/* <div 
  className={`nav-toggle ${isOpen && "open"}`}
  onClick={()=>{
   setIsOpen(!isOpen)
  }}
  >
  <i class="fa fa-bars"></i>
  </div> */}
  </header>
)
}
export default Header;