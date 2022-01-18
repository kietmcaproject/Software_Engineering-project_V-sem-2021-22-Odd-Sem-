import React from "react" ; 
const Contents = (props) => {   
    const elem = <div className="Compp">

        <div className="cards">
            <div className="card">
                <img src={props.Link} alt="MYIMG"
                 className="cardImg"/>
                <div className="cardInfo">
                <h3 className="cardTitle">{props.Title}</h3>
                    <span className="cardCategory"> {props.About}  </span>
                    
                </div>
            </div>
        </div>

    </div>
    return elem ; 
}
export default Contents ; 