public function create(ServerRequestInterface $request): Controller
    {
        $className = $this->getControllerClass($request);
        if ($className === null) {
            throw $this->missingController($request);
        }
        $reflection = new ReflectionClass($className);
        if ($reflection->isAbstract()) {
        }
    }