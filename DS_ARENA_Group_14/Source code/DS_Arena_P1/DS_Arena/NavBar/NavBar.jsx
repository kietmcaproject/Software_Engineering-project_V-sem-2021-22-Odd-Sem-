import "./NavBar.css" ;
import {NavLink} from "react-router-dom";
const NavBar = ()=>{
    const elem=<div className="NavContainer">
    
<nav className="Lis">
  <li><p className="Home">DS_Arena</p></li>
  <li><a className="Cont" href="#Login">LOGIN</a></li>
  <li><NavLink className="Cont"  to="/">Home</NavLink></li>
  <li><a className="Cont" href="#about">About</a></li> 
  <li><NavLink className="Cont"  to="/candidate">Candidates</NavLink></li>
  <li><a className="Cont" href="#blog">Blog</a></li>
 <li><a className="Cont" href="#contact">Contact</a></li>
</nav> 

    </div>
    return elem; 
}
export default NavBar ; 