import {BrowserRouter, Routes, Route} from "react-router-dom"
import PrincipalProductos from "./components/views/almacen/productos/PrincipalProductos";
import Home from "./components/views/Home";

function App() {
  return (
    <>
      <BrowserRouter>
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/almacen/productos" element={<PrincipalProductos />} />

          {/* <Route path="dashboard" element={<Dashboard />}>
            <Route index element={<RecentActivity />} />
            <Route path="project/:id" element={<Project />} />
          </Route> */}
        </Routes>
      </BrowserRouter>
    </>
  );
}

export default App;
