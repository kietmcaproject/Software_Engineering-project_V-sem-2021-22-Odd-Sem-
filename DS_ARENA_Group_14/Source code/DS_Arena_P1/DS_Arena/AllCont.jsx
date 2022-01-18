import React from "react";
import Content from "./Components/Contents";
import Data from "./Data/ContentsData";
import {NavLink} from "react-router-dom"  ;
import "./Components/Contents.css" ;

const AllCont = () => {
    const elem = <>
    
        <NavLink to="/list">
        <Content Link={Data[0].Link} Title={Data[0].Title} About={Data[0].Description} />
        </NavLink>
        <NavLink to="/stack">
        <Content Link={Data[1].Link} Title={Data[1].Title} About={Data[1].Description} />
        </NavLink>
        <NavLink to="/queue">
        <Content Link={Data[2].Link} Title={Data[2].Title} About={Data[2].Description} />
        </NavLink>
        <NavLink to="/tree">
        <Content Link={Data[3].Link} Title={Data[3].Title} About={Data[3].Description} />
        </NavLink>
        
    </>
    return elem;
}
export default AllCont;