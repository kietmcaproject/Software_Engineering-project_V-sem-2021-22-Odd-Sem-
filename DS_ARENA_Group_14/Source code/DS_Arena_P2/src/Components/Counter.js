import React, { useState, useEffect } from "react";

const Counter = () => {
  const [count, setCount] = useState(0);
  //let count = 1;
  //   const setCount = () => {
  //     count++;
  //     console.log(count);
  //   };

  // componentDidMount
  // useEffect(() => {
  //   console.log("The use effect ran");
  // }, []);

  // componentDidUpdate
  // useEffect(() => {
  //   console.log("The use effect ran");
  // }, [count, count2]);

  // componentWillUnmount
  // useEffect(() => {
  //   console.log("The use effect ran");
  //   return () => {
  //     console.log("the return is being ran");
  //   };
  // }, []);

  useEffect(() => {
    console.log(`The count has updated to ${count}`);
    return () => {
      console.log(`we are in the cleanup - the count is ${count}`);
    };
  }, [count]);

  return (
    <div>
      <h1> Counter </h1>
      <h3> current count: {count} </h3>
      <button onClick={() => setCount(count + 1)}>increment the count</button>
    </div>
  );
};

export default Counter;
