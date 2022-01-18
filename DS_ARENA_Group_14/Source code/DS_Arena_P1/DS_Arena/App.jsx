/*
    All the Components which are rendered by clicking from 
    AllCont document are rendered from this page 
*/
import React from "react";
import Stack from "./Components/Stack/Stack";
import AllCont from "./AllCont";
import NavBar from "./NavBar/NavBar";
import Push from "./Components/Stack/Push";
import Pop from "./Components/Stack/Pop";
import Peek from "./Components/Stack/Peek";
import { Switch, Route } from "react-router-dom";
import ArrayR from "./Components/Stack/ArrayRepresentation";
import LinkedR from "./Components/Stack/LinkedRepresentation";
import Code from "./Components/Stack/CompleteProgram";


const App = () => {
    const elem = <div className="Divv">
        <NavBar />
        <Switch>
            <Route exact path="/" component={AllCont} />
            <Route exact path="/Stack" component={Stack} />
            <Route exact path="/stack/push" component={Push} />
            <Route exact path="/stack/pop" component={Pop} />
            <Route exact path="/stack/peek" component={Peek} />
            <Route exact path="/stack/array" component={ArrayR} />
            <Route exact path="/stack/linked" component={LinkedR} />
            <Route exact path="/stack/code" component={Code} />
         


        </Switch>
    </div>
    return elem;
}
export default App;