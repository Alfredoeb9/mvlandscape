import { createLazyFileRoute } from "@tanstack/react-router";
// import "../index.css";

export const Route = createLazyFileRoute("/")({
  component: Index,
});

function Index() {
  return (
    <div className="p-2">
      <h3 className="t">Welcome Home!</h3>
    </div>
  );
}
