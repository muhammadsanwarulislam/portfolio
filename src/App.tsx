import Navigation from "./components/Navigation";
import Header from "./components/Header";
import About from "./components/About";
import Contact from "./components/Contact";
import Project from "./components/Project";
import Work from "./components/Work";

function App() {
  return (
    <div>
      <Navigation />
      <Header />
      <About />
      <Work />
      <Project />
      <Contact />
    </div>
  );
}

export default App;